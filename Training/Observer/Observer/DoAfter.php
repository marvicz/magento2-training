<?php

namespace Training\Observer\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class DoAfter
 * @package Training\Observer\Observer
 */
class DoAfter implements ObserverInterface
{
    /**
     * DoAfter constructor.
     */
    public function __construct()
    {
        //Observer initialization code...
        //You can use dependency injection to get any class this observer may need.
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $argument = $observer->getData('myEventData');
        echo "This is printed after triggering observed controlles' logic with argument 'myEventData': " . $argument;
    }
}