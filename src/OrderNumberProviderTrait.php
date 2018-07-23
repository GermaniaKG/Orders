<?php
namespace Germania\Orders;

trait OrderNumberProviderTrait
{

    /**
     * Order number
     * @var mixed
     */
    public $order_number;


    /**
     * Returns the ordner number.
     *
     * @return mixed
     */
    public function getOrderNumber( )
    {
        return $this->order_number;
    }
}
