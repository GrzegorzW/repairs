<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table("messages")
 */
class Message implements TimelineInterface
{
    const TYPE_PUBLIC = 'public';
    const TYPE_PRIVATE = 'private';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn("sender", referencedColumnName="id")
     */
    private $sender;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Repair", inversedBy="messages")
     * @ORM\JoinColumn("repair", referencedColumnName="id")
     */
    private $repair;
    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min = 2)
     */
    private $content;
    /**
     * @ORM\Column(type="boolean")
     */
    private $was_read;
    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;
    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * Message constructor.
     */
    public function __construct()
    {
        $this->was_read = false;
        $this->type = Message::TYPE_PRIVATE;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getRepair()
    {
        return $this->repair;
    }

    /**
     * @param mixed $repair
     */
    public function setRepair($repair)
    {
        $this->repair = $repair;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getWasRead()
    {
        return $this->was_read;
    }

    /**
     * @param mixed $was_read
     */
    public function setWasRead($was_read)
    {
        $this->was_read = $was_read;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

}
