# Magento2 Training #
## Dependency Injection ##
### Plugins example ###

This module shows usage of all types of Magento2 plugins. 

It prefers Magento\Cms\Controller\Index\Index controller, so when opening Magento2 frontpage, plugins applied on prefered controller methods are triggered.

*The module should be installed in classic way:*

Copy (clone) the Training/Preference module to the <Magento_Root>/app/code directory\
So that the module content would be located in <Magento_Root>/app/code/Training/Plugins

bin/magento module:enable Training_Plugins\
bin/magento setup:upgrade\
bin/magento setup:di:compile\
bin/magento cache:clean\
bin/magento cache:flush