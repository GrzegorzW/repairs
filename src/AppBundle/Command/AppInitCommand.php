<?php

namespace AppBundle\Command;

use libphonenumber\PhoneNumberUtil;
use AppBundle\Entity\Status;
use AppBundle\Entity\TotalRepairPricingResponseMethod;
use AppBundle\Entity\TotalRepairPricingStatus;
use AppBundle\Entity\WorkerOrderStatus;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class AppInitCommand extends ContainerAwareCommand
{
    private $companyName;
    private $localizationName;
    private $username;
    private $name;
    private $surname;
    private $password;
    private $email;
    private $tel;


    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('app:init')
            ->setDescription('Application init.');
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $companyNameQuestion = new Question('Please enter the company name: ');
        $companyNameQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Company name can not be empty.');
            }
            return $answer;
        });
        $this->companyName = $helper->ask($input, $output, $companyNameQuestion);

        $localizationNameQuestion = new Question('Please enter the localization name: ');
        $localizationNameQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Localization name can not be empty.');
            }
            return $answer;
        });
        $this->localizationName = $helper->ask($input, $output, $localizationNameQuestion);

        $usernameQuestion = new Question('Please enter the username: ');
        $usernameQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Username can not be empty.');
            }
            return $answer;
        });
        $this->username = $helper->ask($input, $output, $usernameQuestion);

        $nameQuestion = new Question('Please enter the name: ');
        $nameQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Name can not be empty.');
            }
            return $answer;
        });
        $this->name = $helper->ask($input, $output, $nameQuestion);

        $surnameQuestion = new Question('Please enter the surname: ');
        $surnameQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Surname can not be empty.');
            }
            return $answer;
        });
        $this->surname = $helper->ask($input, $output, $surnameQuestion);

        $passwordQuestion = new Question('Please enter the password: ');
        $passwordQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Password can not be empty.');
            }
            return $answer;
        });
        $passwordQuestion->setHidden(true);
        $this->password = $helper->ask($input, $output, $passwordQuestion);

        $emailQuestion = new Question('Please enter the email: ');
        $emailQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Email can not be empty.');
            }
            return $answer;
        });
        $this->email = $helper->ask($input, $output, $emailQuestion);

        $telQuestion = new Question('Please enter the tel (+48): ');
        $telQuestion->setValidator(function ($answer) {
            if (!$answer) {
                throw new \RuntimeException('Tel can not be empty.');
            }
            return $answer;
        });
        $this->tel = $helper->ask($input, $output, $telQuestion);

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $em->beginTransaction();

        try {
            $companyManager = $this->getContainer()->get('company_manager');
            $company = $companyManager->setCompany($this->companyName);

            $localizationManager = $this->getContainer()->get('localization_manager');
            $localization = $localizationManager->setLocalization($this->localizationName, $company);

            $userManager = $this->getContainer()->get('user_manager');

            if (count($userManager->getSuperAdminUsers()) > 1) {
                throw (new \Exception('Max one superAdmin user is allowed'));
            }

            $userToEdit = count($userManager->getSuperAdminUsers()) ? $userToEdit = $userManager->getSuperAdminUsers()[0] : null;

            $userManager->createSuperadminUser(
                $this->username,
                $this->password,
                $this->email,
                $this->name,
                $this->surname,
                $this->getContainer()->get('libphonenumber.phone_number_util')->parse($this->tel, PhoneNumberUtil::UNKNOWN_REGION),
                $localization,
                $userToEdit
            );

            $statusManager = $this->getContainer()->get('status_manager');
            $saleManager = $this->getContainer()->get('sale_manager');
            $workerOrderManager = $this->getContainer()->get('worker_order_manager');
            $customFieldTemplateManager = $this->getContainer()->get('custom_field_template_manager');

            $repairStatusName = "Oczekuje na diagnozę";
            $statusManager->setStatus($repairStatusName, Status::STATUS_WAITING_FOR_DIAGNOSIS, 1);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Oczekuje na akceptację";
            $statusManager->setStatus($repairStatusName, Status::STATUS_WAITING_FOR_ACCEPTATION, 3);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "W trakcie naprawy";
            $statusManager->setStatus($repairStatusName, Status::STATUS_REPARATION, 5);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Rezygnacja z naprawy";
            $statusManager->setStatus($repairStatusName, Status::STATUS_RESIGNATION, 6);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Gotowy do odbioru";
            $statusManager->setStatus($repairStatusName, Status::STATUS_READY, 7);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Sprzęt wydany";
            $statusManager->setStatus($repairStatusName, Status::STATUS_RETURNED, 8);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Podczas diagnozy";
            $statusManager->setStatus($repairStatusName, Status::STATUS_DIAGNOSING, 2);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));

            $repairStatusName = "Wycena zaakceptowana";
            $statusManager->setStatus($repairStatusName, Status::STATUS_ACCEPTED, 4);
            $output->writeln(sprintf('Created repair status: <comment>%s</comment>', $repairStatusName));


            $workerOrderStatus = "Zamówić";
            $workerOrderManager->setWorkerOrderStatus($workerOrderStatus, WorkerOrderStatus::ORDER_TO_ORDER, 1);
            $output->writeln(sprintf('Created order status: <comment>%s</comment>', $workerOrderStatus));

            $workerOrderStatus = "Zamówiono";
            $workerOrderManager->setWorkerOrderStatus($workerOrderStatus, WorkerOrderStatus::ORDER_ORDERED, 2);
            $output->writeln(sprintf('Created order status: <comment>%s</comment>', $workerOrderStatus));

            $workerOrderStatus = "Dostarczono";
            $workerOrderManager->setWorkerOrderStatus($workerOrderStatus, WorkerOrderStatus::ORDER_SHIPPED, 3);
            $output->writeln(sprintf('Created order status: <comment>%s</comment>', $workerOrderStatus));


            $paymentMethodName = "Gotówka";
            $paymentMethod = $saleManager->createPaymentMethod($paymentMethodName, 1);
            $saleManager->save($paymentMethod);
            $output->writeln(sprintf('Created payment method: <comment>%s</comment>', $paymentMethodName));

            $paymentMethodName = "Przelew tradycyjny";
            $paymentMethod = $saleManager->createPaymentMethod($paymentMethodName, 2);
            $saleManager->save($paymentMethod);
            $output->writeln(sprintf('Created payment method: <comment>%s</comment>', $paymentMethodName));

            $paymentMethodName = "Za pobraniem";
            $paymentMethod = $saleManager->createPaymentMethod($paymentMethodName, 3);
            $saleManager->save($paymentMethod);
            $output->writeln(sprintf('Created payment method: <comment>%s</comment>', $paymentMethodName));


            $responseMethodName = "acceptation.method.application";
            $saleManager->createTotalRepairPricingResponseMethod($responseMethodName, TotalRepairPricingResponseMethod::TYPE_APP, 1);
            $output->writeln(sprintf('Created acceptation method: <comment>%s</comment>', $responseMethodName));

            $responseMethodName = "acceptation.method.email";
            $saleManager->createTotalRepairPricingResponseMethod($responseMethodName, TotalRepairPricingResponseMethod::TYPE_EMAIL, 2);
            $output->writeln(sprintf('Created acceptation method: <comment>%s</comment>', $responseMethodName));

            $responseMethodName = "acceptation.method.phone";
            $saleManager->createTotalRepairPricingResponseMethod($responseMethodName, TotalRepairPricingResponseMethod::TYPE_PHONE, 3);
            $output->writeln(sprintf('Created acceptation method: <comment>%s</comment>', $responseMethodName));

            $responseMethodName = "acceptation.method.personally";
            $saleManager->createTotalRepairPricingResponseMethod($responseMethodName, TotalRepairPricingResponseMethod::TYPE_PERSONALLY, 4);
            $output->writeln(sprintf('Created acceptation method: <comment>%s</comment>', $responseMethodName));


            $totalRepairPricingStatusName = "repair.total.pricing.waiting";
            $saleManager->createTotalRepairPricingStatus($totalRepairPricingStatusName, TotalRepairPricingStatus::TYPE_WAITING_FOR_ACCEPTATION, 1);
            $output->writeln(sprintf('Created acceptation status: <comment>%s</comment>', $totalRepairPricingStatusName));

            $totalRepairPricingStatusName = "repair.total.pricing.accepted";
            $saleManager->createTotalRepairPricingStatus($totalRepairPricingStatusName, TotalRepairPricingStatus::TYPE_ACCEPTED, 2);
            $output->writeln(sprintf('Created acceptation status: <comment>%s</comment>', $totalRepairPricingStatusName));

            $totalRepairPricingStatusName = "repair.total.pricing.rejected";
            $saleManager->createTotalRepairPricingStatus($totalRepairPricingStatusName, TotalRepairPricingStatus::TYPE_REJECTED, 3);
            $output->writeln(sprintf('Created acceptation status: <comment>%s</comment>', $totalRepairPricingStatusName));


            $em->commit();


            $output->writeln(sprintf('Created company <comment>%s</comment>', $this->companyName));
            $output->writeln(sprintf('Created localization <comment>%s</comment>', $this->localizationName));
            $output->writeln(sprintf('Created superadmin user <comment>%s</comment>', $this->username));
        } catch (\Exception $e) {
            $em->rollback();
            $output->writeln(sprintf('Zmiany nie zostały wprowadzone. Wystąpił błąd: <comment>%s</comment>', $e->getMessage()));
        }
    }
}