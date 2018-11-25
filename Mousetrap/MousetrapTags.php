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
        $files = ['mousetrap.min.js', 'statamic-mousetrap.js'];
        $js = '';

        $js .= $this->js->inline('var Trap = ' . json_encode(['edit_url' => array_get($this->context, 'edit_url')]) . ';') . PHP_EOL;

        foreach ($files as $file) {
            $js .= $this->js->tag($file);
        }

        return $js;
    }
}
