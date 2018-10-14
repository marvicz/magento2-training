<?php

namespace Training\Plugins\Controller;

/**
 * Class Index
 * @package Training\Preference\Controller
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        echo "<h3>This is a Training Plugins result</h3><br>";

        echo "<u>Before</u>: " .
            $this->methodToBeObservedOne("Text to be modified before this method is triggered");

        echo "<br><br>";
        echo "<u>After</u>: " .
            $this->methodToBeObservedTwo();

        echo "<br><br>";
        echo "<u>Around</u>: " .
            $this->methodToBeObservedThree("Argument of not triggered method");

        die();
    }

    /**
     * Plugin Before will be applied
     * @param $alreadyModified
     * @return mixed
     */
    public function methodToBeObservedOne($alreadyModified)
    {
        return $alreadyModified;
    }

    /**
     * Plugin After will be applied
     * @return string
     */
    public function methodToBeObservedTwo()
    {
        return "Text to be modified after the method is processed";
    }

    /**
     * Plugin Around will be applied
     * @param $text
     * @return mixed
     */
    public function methodToBeObservedThree($argument)
    {
        return $argument;
    }
}