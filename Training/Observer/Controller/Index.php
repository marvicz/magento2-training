<?php

namespace Training\Observer\Controller;

use Magento\Framework\App\Action\Context;

/**
 * Class Index
 * @package Training\Preference\Controller
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /** @var \Magento\Framework\Event\Manager */
    private $eventManager;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Magento\Framework\Event\Manager $eventManager
     */
    public function __construct
    (
        Context                          $context,
        \Magento\Framework\Event\Manager $eventManager
    )
    {
        $this->eventManager = $eventManager;
        parent::__construct($context);
    }


    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $eventData = null;

        $this->eventManager->dispatch('training_observer_event_before');

        /** Some logic here */
        echo "Observed controller: Running logic<br>";
        $eventData = "Event Data";

        $this->eventManager->dispatch('training_observer_event_after',['myEventData'=>$eventData]);

        die();
    }
}