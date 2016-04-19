<?php

    return [

        'plugin' => [
            'name'              => 'QR Code',
            'description'       => 'Affiche un QR Code avec vos données'
        ],

        'components' => [
            'qrcode' => [
                'name'        => 'QR Code',
                'description' => 'Affiche un QR Code avec vos données',
                'level'       => [
                    'title'     => 'Niveau ECC',
                    'name'      => 'Niveau ECC à appliquer (entre L, M, Q, H)'
                ],
                'foreground'  => [
                    'title'             => 'Couleur de Premier plan',
                    'description'       => 'Couleur de Premier plan',
                    'validationMessage' => 'La propriété Couleur de Premier plan contient uniquement des numériques et # (#000000)'
                ],
                'background'  => [
                    'title'             => 'Couleur de Fond',
                    'description'       => 'Couleur de Fond à utiliser',
                    'validationMessage' => 'La propriété Couleur de Fond contient uniquement des numériques et # (#000000)'
                ],
                'size'        => [
                    'title'             => 'Taille',
                    'description'       => 'Taille du QR code généré (1 à 10)',
                    'validationMessage' => 'La propriété Taille ne peut conteir que des valeurs entre 1 et 10'
                ],
                'value'       => [
                    'title'       => 'Texte du QR Code',
                    'description' => 'Valeur à coder dans le QR code'
                ],
            ]
        ]

    ];

?>