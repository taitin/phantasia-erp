<?php

namespace App\Admin\Extensions\Tools;

use Dcat\Admin\Widgets\Tab as WidgetsTab;


class Tab extends WidgetsTab
{
    /**
     * Add a link on tab.
     *
     * @param  string  $title
     * @param  string  $href
     * @param  bool  $active
     * @return $this
     */
    public function addLink($title, $href, $active = false, $content = '')
    {
        $this->data['tabs'][] = [
            'id'      => mt_rand(),
            'title'   => $title,
            'href'    => $href,
            'type'    => static::TYPE_LINK,
            'content'    => $content,

        ];

        if ($active) {
            $this->data['active'] = count($this->data['tabs']) - 1;
        }

        return $this;
    }
}
