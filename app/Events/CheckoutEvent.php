<?php

namespace CodeCommerce\Events;

use CodeCommerce\Events\Event;
use CodeCommerce\Order;
use Illuminate\Queue\SerializesModels;

class CheckoutEvent extends Event {
    use SerializesModels;

    private $order;

    /**
     * Create a new event instance.
     *
     * @param \CodeCommerce\Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * @return \CodeCommerce\Order
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * @param \CodeCommerce\Order $order
     */
    public function setOrder($order) {
        $this->order = $order;
    }
}