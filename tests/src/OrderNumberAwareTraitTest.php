<?php
namespace tests;

use Germania\Orders\OrderNumberAwareTrait;
use Germania\Orders\OrderNumberProviderInterface;

class OrderNumberIdAwareTraitTest extends \PHPUnit\Framework\TestCase
{
    public function testGetterAndSetter()
    {
        $mock = $this->getMockForTrait( OrderNumberAwareTrait::class );

        $order_number = 3;

        // Make sure we are really changing the number here
        $this->assertNotEquals( $order_number, $mock->getOrderNumber());

        $mock->setOrderNumber($order_number);
        $this->assertEquals( $order_number, $mock->getOrderNumber());
    }


    public function testSetterWithOrderNumberProviderInterface()
    {
        $mock = $this->getMockForTrait( OrderNumberAwareTrait::class );

        // Make sure we are really changing the number here
        $order_number = 3;
        $this->assertNotEquals( $order_number, $mock->getOrderNumber());

        $provider = $this->prophesize( OrderNumberProviderInterface::class );
        $provider->getOrderNumber()->willReturn( $order_number );
        $mock->setOrderNumber( $provider->reveal() );

        $this->assertEquals( $order_number, $mock->getOrderNumber());
    }
}
