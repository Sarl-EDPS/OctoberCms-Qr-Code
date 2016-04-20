<?php

    return [

        'plugin' => [
            'name'              => 'QR Code',
            'description'       => 'Show QR Code with your Data'
        ],

        'components' => [
            'qrcode' => [
                'name'        => 'QR Code',
                'description' => 'Displays QR Code with your Data',
                'level' => [
                    'title'     => 'ECC Level',
                    'name'      => 'ECC level to be applied (e.g. L, M, Q, H)'
                ],
                'foreground' => [
                    'title'             => 'Foreground Color',
                    'description'       => 'Foreground color to be used',
                    'validationMessage' => 'The Foreground property can contain only numeric symbols and # (#000000)'
                ],
                'background' => [
                    'title'       => 'Background Color',
                    'description' => 'Foreground color to be used',
                    'validationMessage' => 'The Background property can contain only numeric symbols and # (#000000)'
                ],
                'size' => [
                    'title'             => 'Size',
                    'description'       => 'Module size of the generated QR code (e.g. 1-10)',
                    'validationMessage' => 'The Size property can contain only numeric (1 to 10)'
                ],
                'value' => [
                    'title'       => 'QR Code text',
                    'description' => 'Value to be encoded in the generated QR code'
                ],
            ]
        ]

    ];

?>