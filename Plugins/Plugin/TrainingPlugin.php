<?php

namespace Training\Plugins\Plugin;

/**
 * Class ExamplePlugin
 * @package Training\Plugins\Plugin
 */
class TrainingPlugin
{
    /**
     * @param \Training\Plugins\Controller\Index $subject
     * @param $textToBeModifiedBefore
     * @return array
     */
    public function beforeMethodToBeObservedOne(\Training\Plugins\Controller\Index $subject, $textToBeModifiedBefore)
    {
        $modifiedText = strtoupper($textToBeModifiedBefore) . " - 'strtoupper' was applied before running observed method";

        return [$modifiedText];
    }

    /**
     * @param \Training\Plugins\Controller\Index $subject
     * @param $result
     * @return string
     */
    public function afterMethodToBeObservedTwo(\Training\Plugins\Controller\Index $subject, $result)
    {
        $result = strtoupper($result) . " - 'strtoupper' was applied after the observed method was ran";

        return $result;
    }

    /**
     * @param \Training\Plugins\Controller\Index $subject
     * @param callable $proceed
     * @param $text
     * @return string
     */
    public function aroundMethodToBeObservedThree(\Training\Plugins\Controller\Index $subject, callable $procede, $text)
    {
        $textBefore = "This applies 'strtoupper' on method's argument before observed method is trigered: " . strtoupper($text);
        $result     = $procede($textBefore);
        $result     = "
<br>Function PROCEDE returns result of all following plugins - none are present here so it shows text from BEFORE part of this plugin: <br>" . $result . "
<br><br>... the AFTER part 'strtolower' and italic is applied then: <br><i>" . strtolower($result) . "</i>";

        return $result;
    }
}