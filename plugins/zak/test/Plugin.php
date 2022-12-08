<?php namespace Zak\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * test Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'test',
            'description' => 'No description provided yet...',
            'author'      => 'Zak',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    

    
     /* Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'test' => [
                'label'       => 'test',
                'url'         => Backend::url('zak/test/posts'),
                'icon'        => 'icon-diamond',
                'permissions' => ['zak.test.*'],
                'order'       => 500,
            ],
        ];
    }
}
