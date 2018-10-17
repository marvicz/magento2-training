<?php

namespace Training\ConsoleCommand\Model;

use \Magento\Framework\Model\AbstractModel;

/**
 * Class SomeLogic
 * @package Training\ConsoleCommand\Model
 */
class SomeLogic extends AbstractModel
{
    /**
     * @return string
     */
    public function getLogicResult()
    {
        return "This is a result of a SomeLogic model";
    }
}