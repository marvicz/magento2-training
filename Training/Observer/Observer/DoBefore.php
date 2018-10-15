<?php

namespace Training\Observer\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class DoBefore
 * @package Training\Observer\Observer
 */
class DoBefore implements ObserverInterface
{
    /**
     * DoBefore constructor.
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
        echo "This is printed before triggering observed controlles' logic<br>";
    }
}