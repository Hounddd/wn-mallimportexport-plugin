<?php namespace Hounddd\MallImportExport;

use System\Classes\PluginBase;
use Hounddd\MallImportExport\Classes\Registration\BootEvents;
use Hounddd\MallImportExport\Classes\Registration\BootControllers;

/**
 * MallImportExport Plugin Information File
 */
class Plugin extends PluginBase
{
    use BootEvents;
    use BootControllers;

    /**
     * @var array Plugin dependencies
     */
    public $require = ['Offline.Mall'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'hounddd.mallimportexport::lang.plugin.name',
            'description' => 'hounddd.mallimportexport::lang.plugin.description',
            'author'      => 'Hounddd',
            'icon'        => 'icon-retweet',
            'homepage'    => 'https://github.com/Hounddd/wn-mallimportexport-plugin',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $this->registerEvents();
        $this->registerControllers();
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'hounddd.mallimportexport.import' => [
                'tab' => 'Mall Import/Export',
                'label' => 'hounddd.mallimportexport::lang.permissions.import'
            ],
            'hounddd.mallimportexport.export' => [
                'tab' => 'Mall Import/Export',
                'label' => 'hounddd.mallimportexport::lang.permissions.export'
            ],
        ];
    }
}
