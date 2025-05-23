<?php
class Order
{
    public function __construct(
        private array $company = array(),
        private User $user,
        private DateTime $date_order,
        private DateTime $date_payment,
        private OrderStatus $status,
        private OrderPaymentMethod $payment_method
    ){}

    
    // ============ GETs ============
    public function getCompany()
    {
        return $this->company;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getDateOrder()
    {
        return $this->date_order;
    }

    public function getDatePayment()
    {
        return $this->date_payment;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getPaymentMethod()
    {
        return $this->payment_method;
    }


    // ============ SETs ============
    public function setCompany($company)
    {
        $this->company[] = $company;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function setDateOrder($date_order)
    {
        $this->date_order = $date_order;
    }

    public function setDatePayment($date_payment)
    {
        $this->date_payment = $date_payment;
    }

    public function setStatus(OrderStatus $status)
    {
        $this->status = $status;
    }

    public function setPaymentMethod(OrderPaymentMethod $payment_method)
    {
        $this->payment_method = $payment_method;
    }
}
?>