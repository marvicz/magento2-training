# Magento2 Training #
## Dependency Injection ##
### Preference example ###

This module shows configuration of di.xml file to prefer original object with required one.

It prefers Magento\Cms\Controller\Index\Index controller, so when opening Magento2 frontpage, text of our controller is printed instead of original site.

*The module should be installed in classic way:*

Copy (clone) the Training/Preference module to the <Magento_Root>/app/code directory\
So that the module content would be located in <Magento_Root>/app/code/Training/Preference

bin/magento module:enable Training_Preference\
bin/magento setup:upgrade\
bin/magento setup:di:compile\
bin/magento cache:clean\
bin/magento cache:flush