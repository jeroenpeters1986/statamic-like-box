<?php

namespace Jeroenpeters1986\StatamicLikeBox;

use Statamic\Providers\AddonServiceProvider;
use Tags\Likebox;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Likebox::class,
    ];

    public function bootAddon()
    {
        //
    }
}
