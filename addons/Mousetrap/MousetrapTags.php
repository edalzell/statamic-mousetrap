<?php

namespace Statamic\Addons\Mousetrap;

use Statamic\Extend\Tags;
use Statamic\API\Config;
use Statamic\API\Path;

class MousetrapTags extends Tags
{
    /**
     * The {{ mousetrap }} tag
     *
     * @return string|array
     */
    public function index()
    {
    }

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
    		$scripts .= '<script src="' . Path::assemble(Config::getThemePath(), 'js', $file) . '"></script>';
        }
        
        return $scripts;
    }
}
