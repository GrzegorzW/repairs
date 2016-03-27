<?php

namespace AppBundle\Entity;

use DateTime;
use Money\Money;

interface CostInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * @return DateTime
     */
    public function getCreated();

    /**
     * @param DateTime $created
     */
    public function setCreated($created);

    /**
     * @return mixed
     */
    public function getDescription();

    /**
     * @param mixed $description
     */
    public function setDescription($description);

    /**
     * @return mixed
     */
    public function getAuthor();

    /**
     * @param mixed $author
     */
    public function setAuthor($author);

    /**
     * @return mixed
     */
    public function getCostKind();

    /**
     * @param mixed $type
     */
    public function setCostKind($type);

    /**
     * get Money
     *
     * @return Money
     */
    public function getPrice();

    /**
     * Set price
     *
     * @param Money $price
     */
    public function setPrice(Money $price);

    /**
     * @return mixed
     */
    public function getUpdated();

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated);

    /**
     * @return mixed
     */
    public function getLocalization();

    /**
     * @return mixed
     */
    public function setLocalization($localization);

}