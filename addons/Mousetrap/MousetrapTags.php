<?php

namespace Statamic\Addons\Mousetrap;

use Statamic\Extend\Tags;

class MousetrapTags extends Tags
{
    /**
     * The {{ mousetrap:js }} tag
     *
     * @return string|array
     */
    public function js()
    {
    	$files = array('mousetrap.min.js', 'statamic-mousetrap.js');
    	$scripts = '';
    	
    	foreach ($files as $file) {
    		$scripts .= $this->js->tag($file);
        }
        
        return $scripts;
    }
}
