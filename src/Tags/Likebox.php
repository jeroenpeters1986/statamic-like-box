<?php

namespace Jeroenpeters1986\StatamicLikebox\Tags;

use Statamic\Tags\Tags;

class Likebox extends Tags
{
    protected static $handle = 'likebox';

    /**
     * The {{ likebox }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $page_name = $this->params->get('page', 'statamic');
        $width = $this->params->get('width', '240');
        $height = $this->params->get('height', 'auto');
        $language = $this->params->get('lang', 'en_US');
        $compact_header = $this->params->get('compact_header', 'false');
        $hide_cover = $this->params->get('hide_header_cover', 'true');
        $content_tabs = $this->params->get('content_tabs', 'false');

        return "<div class='fb-page'
             data-href='https://www.facebook.com/{$page_name}'
             data-width='{$width}' 
             " . $height ?? " data-height='" . $height . "'" . "
             data-tabs='{$content_tabs}'
             data-hide-cover='{$hide_cover}'
             data-small-header='{$compact_header}'></div>
        <div id='fb-root'></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = '//connect.facebook.net/{$language}/all.js#xfbml=1&appId=';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>";
    }
}
