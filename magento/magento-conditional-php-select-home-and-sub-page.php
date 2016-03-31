if(
(Mage::getSingleton('cms/page')->getIdentifier() == 'home' || Mage::getSingleton('cms/page')->getIdentifier() == 'home-test') &&
Mage::app()->getFrontController()->getRequest()->getRouteName() == 'cms'
) { 
echo ‘do this’;
} 
