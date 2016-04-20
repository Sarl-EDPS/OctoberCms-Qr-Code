<?php namespace Edps\QrCode\Components;

use Cms\Classes\ComponentBase;
use \stdClass;

class QrCode extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'edps.qrcode::lang.components.qrcode.name',
            'description' => 'edps.qrcode::lang.components.qrcode.description'
        ];
    }
  	public function defineProperties()
    {
        return [
            'level' => [
                'title'             => 'edps.qrcode::lang.components.qrcode.level.title',
                'description'		=> 'edps.qrcode::lang.components.qrcode.level.name',
                'type'              => 'string',
                'validationPattern' => '^[L,M,Q,H]+$',
                'validationMessage' => 'edps.qrcode::lang.components.qrcode.foreground.validationMessage',
                'default'			=> 'Q',
            ],
            'foreground' => [
                'title'             => 'edps.qrcode::lang.components.qrcode.foreground.title',
                'type'              => 'string',
                'description'		=> 'edps.qrcode::lang.components.qrcode.foreground.description',
                'validationPattern' => '#([a-fA-F0-9]){3}(([a-fA-F0-9]){3})?\b',
                'validationMessage' => 'edps.qrcode::lang.components.qrcode.foreground.validationMessage',
                'default'			=> '#4040FF',
            ],
            'background' => [
                'title'             => 'edps.qrcode::lang.components.qrcode.background.title',
                'description'       => 'edps.qrcode::lang.components.qrcode.background.description',
                'type'              => 'string',
                'validationPattern' => '#([a-fA-F0-9]){3}(([a-fA-F0-9]){3})?\b',
                'validationMessage' => 'edps.qrcode::lang.components.qrcode.background.validationMessage',
                'default'           => '#FFECB3',
            ],
            'size' => [
                'title'             => 'edps.qrcode::lang.components.qrcode.size.title',
                'description'       => 'edps.qrcode::lang.components.qrcode.size.description',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'edps.qrcode::lang.components.qrcode.size.validationmessage',
                'default'           => 7,
            ],
            'value' => [
                'title'             => 'edps.qrcode::lang.components.qrcode.value.title',
                'description'       => 'edps.qrcode::lang.components.qrcode.value.description',
                'default'           => 'EDPS, France, contactus@edps.fr, www.edps.fr',
                'type'              => 'text',
            ]       
        ];
    }
  	public function onRun()
    {    
        $QrCode = new stdClass();

        $QrCode->level              = $this->property('level');
        $QrCode->foreground         = $this->property('foreground');
        $QrCode->background         = $this->property('background');
        $QrCode->size               = $this->property('size');
        $QrCode->value              = $this->property('value');

        $this->page['dataToQrCode'] = $QrCode;


        $this->addCss('/plugins/edps/qrcode/assets/css/style.css');
   	}

}
