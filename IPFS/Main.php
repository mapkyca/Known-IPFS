<?php

namespace IdnoPlugins\IPFS {
    
    class Main extends \Idno\Common\Plugin
    {

        function registerPages()
        {
	    // Register admin settings
	    \Idno\Core\site()->addPageHandler('admin/ipfs', '\IdnoPlugins\IPFS\Pages\Admin');

	    // Add menu items to account & administration screens
	    \Idno\Core\site()->template()->extendTemplate('admin/menu/items', 'admin/ipfs/menu');
        }

        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'ipfs', dirname(__FILE__) . '/languages/'
                )
            );
        }
	
	function registerEventHooks() {
	    
	    \Idno\Core\site()->filesystem = new \IdnoPlugins\IPFS\IPFSFileSystem();

	}

    }

}
