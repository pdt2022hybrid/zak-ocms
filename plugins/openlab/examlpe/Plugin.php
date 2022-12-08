<?php namespace Openlab\Examlpe;

use Backend;
use System\Classes\PluginBase;

/**
 * examlpe Plugin Information File
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
            'name'        => 'examlpe',
            'description' => 'No description provided yet...',
            'author'      => 'Openlab',
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

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Openlab\Examlpe\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'openlab.examlpe.some_permission' => [
                'tab' => 'examlpe',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'examlpe' => [
                'label'       => 'examlpe',
                'url'         => Backend::url('openlab/examlpe/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['openlab.examlpe.*'],
                'order'       => 500,
            ],
        ];
    }
}
