<?php
 
namespace Rafaelcg\QuickView\Controller\Product;
 
use Magento\Catalog\Controller\Product\View as CatalogView;

class View extends CatalogView
{
    public function execute()
    {
        if ($this->getRequest()->getParam("iframe")) {
            $layout = $this->_view->getLayout();
            $layout->getUpdate()->addHandle('quickview_product_view');
        }
        return parent::execute();
    }
}