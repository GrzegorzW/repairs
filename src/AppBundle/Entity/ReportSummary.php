<?php

namespace AppBundle\Entity;

class ReportSummary
{
    const SHOW_APPROVED_AND_NOT_APPROVED = 2;
    const SHOW_APPROVED = 1;
    const SHOW_NOT_APPROVED = 0;

    const SHOW_ONLY_REPAIRS = 'repairs';

    private $total_cost;

    private $total_price;

    private $total_profit;

    private $total_count;

    private $approved_count;

    private $not_approved_count;

    /**
     * @return mixed
     */
    public function getTotalCost()
    {
        return $this->total_cost;
    }

    /**
     * @param mixed $total_cost
     */
    public function setTotalCost($total_cost)
    {
        $this->total_cost = $total_cost;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param mixed $total_price
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;
    }

    /**
     * @return mixed
     */
    public function getTotalProfit()
    {
        return $this->total_profit;
    }

    /**
     * @param mixed $total_profit
     */
    public function setTotalProfit($total_profit)
    {
        $this->total_profit = $total_profit;
    }

    /**
     * @return mixed
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * @param mixed $total_count
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
    }

    /**
     * @return mixed
     */
    public function getApprovedCount()
    {
        return $this->approved_count;
    }

    /**
     * @param mixed $approved_count
     */
    public function setApprovedCount($approved_count)
    {
        $this->approved_count = $approved_count;
    }

    /**
     * @return mixed
     */
    public function getNotApprovedCount()
    {
        return $this->not_approved_count;
    }

    /**
     * @param mixed $not_approved_count
     */
    public function setNotApprovedCount($not_approved_count)
    {
        $this->not_approved_count = $not_approved_count;
    }


}
