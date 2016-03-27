<?php

namespace AppBundle\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\PersistentCollection;
use Gedmo\Loggable\Entity\LogEntry;

class ChangelogManager
{
    /** @var EntityManager */
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function transform(LogEntry $log)
    {
        $class = $log->getObjectClass();
        $data = [];

        foreach ($log->getData() as $field => $value) {
            try {
                $associationMapping = $this->em->getClassMetadata($class)->getAssociationMapping($field);
                $value = $this->getRelatedEntity($associationMapping['targetEntity'], $value);
            } catch (\Exception $e) {
            }
            $data[$field] = $value;
        }
        $log->setData($data);

        return $log;
    }

    private function getRelatedEntity($targetEntity, $values)
    {
        $values = is_array($values) ? $values : [$values];
        return array_map(function ($id) use ($targetEntity) {
            return $this->em->getRepository($targetEntity)->find($id);
        }, $values);
    }

    public function getChangelog($object)
    {
        $repo = $this->em->getRepository('Gedmo\Loggable\Entity\LogEntry');
        $logs = $repo->getLogEntries($object);

        if ($logs) {
            /** @var LogEntry $log */
            foreach ($logs as $log) {
                $this->transform($log);
            }
        } else {
            return null;
        }

        $logs = array_reverse($logs);

        return $logs;
    }

    public function getPricingChangelog(PersistentCollection $statement)
    {
        $statementChangelog = [];

        foreach ($statement as $entry) {
            $statementChangelog[] = $this->getChangelog($entry);
        }

        return $statementChangelog;
    }
}