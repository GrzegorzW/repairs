<?php

namespace AppBundle\Helpers;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use AppBundle\Entity\CostInterface;
use AppBundle\Entity\Status;
use Symfony\Component\HttpFoundation\Session\Session;

class Helpers
{
    /**
     * @var EntityManager
     */
    private $now;

    public function __construct()
    {
        $this->now = new DateTime();
    }

    public function getDaysVariety(DateTime $date)
    {
        $diff = $this->getDaysFromDateToNow($date);

        switch ($diff) {
            case (0):
                return "";
            case (1):
                return "(upłynął " . $diff . " dzień)";
            case ($diff > 1 && $diff < 5):
                return "(upłynęły " . $diff . " dni)";
            default:
                return "(upłynęło " . $diff . " dni)";
        }
    }

    public function getDaysFromDateToNow(DateTime $date)
    {
        return date_diff($date, $this->now)->days;
    }

    public function isInstanceOf($object, $class)
    {
        return is_a($object, $class, true);
    }
}
