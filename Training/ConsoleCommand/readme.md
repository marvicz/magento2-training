# Magento2 Training #

### ConsoleCommand ###

This module shows setting up of custom console command. After installing, put in console:\
bin/magento training:console:command --getSomeLogic

Of'course, it is possible not to use optional arguments as well, then you can use commented part of code in ConsoleCommand.php


*The module should be installed in classic way:*

Copy (clone) the Training/Preference module to the <Magento_Root>/app/code directory\
So that the module content would be located in <Magento_Root>/app/code/Training/ConsoleCommand

bin/magento module:enable Training_ConsoleCommand\
bin/magento setup:upgrade\
bin/magento setup:di:compile\
bin/magento cache:clean\
bin/magento cache:flush