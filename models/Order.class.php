<?php
class Order
{
    private int $id_order;
    private int $user_id;

    public function __construct(
        private DateTime $date_order,
        private DateTime $date_payment,
        private OrderMethodPayment $method_payment
    ){}

    
    // ============ GETs ============
    public function getIdOrder()
    {
        return $this->id_order;
    }

    public function getDateOrder()
    {
        return $this->date_order;
    }

    public function getDatePayment()
    {
        return $this->date_payment;
    }

    public function getMethodPayment()
    {
        return $this->method_payment;
    }

    public function getUserId()
    {
        return $this->user_id;
    }


    // ============ SETs ============
    public function setDateOrder($date_order)
    {
        $this->date_order = $date_order;
    }

    public function setDatePayment($date_payment)
    {
        $this->date_payment = $date_payment;
    }

    public function setMethodPayment(OrderMethodPayment $method_payment)
    {
        $this->method_payment = $method_payment;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}
?>