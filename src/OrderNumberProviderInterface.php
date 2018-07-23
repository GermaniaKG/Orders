<?php
namespace Germania\Orders;

interface OrderNumberProviderInterface
{

    /**
     * Returns the ordner number.
     *
     * @return mixed
     */
    public function getOrderNumber();
}
