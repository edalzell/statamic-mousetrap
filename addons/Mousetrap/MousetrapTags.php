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
    	$theme_settings = Config::get('theming');
    	$theme = $theme_settings['theme'];
    	
    	$scripts = '';
    	
    	foreach ($files as $file) {
    		$scripts .= '<script src="' . Path::assemble(themes_path(), $theme, 'js', $file) . '"></script>';
        }
        
        return $scripts;
    }
}
