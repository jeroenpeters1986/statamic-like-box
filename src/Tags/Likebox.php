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
        $show_header = $this->params->get('show_header', 'true');
        $compact_header = $this->params->get('compact_header', 'false');
        $hide_cover = $this->params->get('hide_header_cover', 'true');
        $content_tabs = $this->params->get('content_tabs', 'false');

        /** Jankie jankie */
        /**
            if (!empty($this->facebook_height) && $this->facebook_height != "auto') {
                echo 'data-height="' . $this->facebook_height . '"' . "\n";
            }?>
         **/


        $html = "<div class='fb-page'
             data-href='https://www.facebook.com/{$page_name}'
             data-width='{$width}'
             data-height='{$height}'
             data-tabs='{$content_tabs}'
             data-hide-cover='{$content_tabs}'
             data-small-header='{$compact_header}'></div>
        <div id='fb-root'></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = '//connect.facebook.net/{$language}/all.js#xfbml=1&appId=';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>";

        return $html;
    }
}
