<?php

namespace Jeroenpeters1986\StatamicLikebox;

use Illuminate\Support\Facades\File;
use Statamic\Providers\AddonServiceProvider;
use Statamic\Support\Arr;
use Symfony\Component\Yaml\Yaml;
use Tags\Likebox;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tags\Likebox::class,
    ];

    public function register()
    {
        $pagebuilder_yaml_path = base_path('resources/fieldsets/page_builder.yaml');

        /* Install pagebuilder block if Peak starter kit is installed, also using Peak code by Studio1902 */
        if( file_exists($pagebuilder_yaml_path)) {
            $pagebuilderSet = Yaml::parseFile($pagebuilder_yaml_path);

            File::put('resources/fieldsets/likebox.yaml',
                file_get_contents(__DIR__ . '/../resources/fieldsets/likebox.yaml'));
            File::put('resources/views/page_builder/likebox.blade.php',
                file_get_contents(__DIR__ . '/../resources/views/page_builder/likebox.blade.php'));

            $existingSets = Arr::get($pagebuilderSet, 'fields.0.field.sets');
            $existingSets['likebox'] = ['display' => 'Facebook Likebox', 'fields' => [['import' => 'likebox']]];
            $existingSets = collect($existingSets)->sortBy(function ($value, $key) {
                return $key;
            })->all();

            Arr::set($pagebuilderSet, 'fields.0.field.sets', $existingSets);
            File::put($pagebuilder_yaml_path, Yaml::dump($pagebuilderSet, 99, 2));
        }
    }
}
