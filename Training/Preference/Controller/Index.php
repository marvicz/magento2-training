<?php

namespace Training\Preference\Controller;

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
        echo "
This is a Training\Preference\Index controller.<br>
The preference of original controller Magento\Cms\Controller\Index\Index is configured in:<br>
<Magento_Root>app/code/Training/Preference/etc/di.xml
";
        die();
    }
}