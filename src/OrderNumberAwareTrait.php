<?php
namespace Germania\Orders;

use Germania\Orders\OrderNumberProviderInterface;

trait OrderNumberAwareTrait
{
    use OrderNumberProviderTrait;

    /**
     * Sets the order number.
     *
     * @param   mixed  $order_number
     * @return  $this  Fluent interface
     */
    public function setOrderNumber( $order_number )
    {
        if ($order_number instanceOf OrderNumberProviderInterface)
            $order_number = $order_number->getOrderNumber();

        $this->order_number = $order_number;
        return $this;
    }
}
