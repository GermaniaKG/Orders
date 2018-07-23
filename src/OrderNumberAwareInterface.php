<?php
namespace Germania\Orders;

interface OrderNumberAwareInterface extends OrderNumberProviderInterface
{

    /**
     * Sets the order number.
     *
     * @param   mixed  $order_number
     */
    public function setOrderNumber( $order_number );
}
