<?php
namespace tests;

use Germania\Orders\OrderNumberProviderTrait;

class OrderNumberProviderTraitTest extends \PHPUnit\Framework\TestCase
{
    public function testGetInterceptor()
    {
        $mock = $this->getMockForTrait( OrderNumberProviderTrait::class );

        $order_number = 3;

        // Trait introduces this attribute
        $this->assertObjectHasAttribute('order_number', $mock);
        $mock->order_number = $order_number;

        $this->assertEquals( $order_number, $mock->getOrderNumber());
    }
}
