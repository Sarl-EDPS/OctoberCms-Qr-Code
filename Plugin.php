<?php namespace Edps\QrCode;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'edps.qrcode::lang.plugin.name',
            'description' => 'edps.qrcode::lang.plugin.description',
            'author'      => 'EDPS - JM BRUNO',
            'icon'        => 'icon-barcode',
            'homepage'    => 'https://github.com/Sarl-EDPS/OctoberCms-Qr-Code'
        ];
    }

    public function registerComponents()
    {
        return [
            'Edps\QrCode\Components\QrCode' => 'QrCode'
        ];
    }

    public function registerSettings()
    {
    }
}
