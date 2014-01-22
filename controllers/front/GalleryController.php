<?php
class GalleryControllerCore extends FrontController
{
	public $php_self = 'gallery';
	public function initContent()
	{
	  parent::initContent();
	
	  $this->setTemplate(_PS_THEME_DIR_.'gallery.tpl');
	}
}
