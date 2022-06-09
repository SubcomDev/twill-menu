# Twill menu



## Installation

Laravel 9, Twill are required.

- composer install
- php artisan migrate
- php artisan twill:install
- php artisan optimize
- php artisan migrate
- add bellow code to config/twill-navigation.php

return [

    'menus' => [
    'title' => 'Menu',
    'module' => true,
    ],
];

- add bellow code to config/twill.php inside block_editor
 
    'directories' => [

      'source' => [
      'blocks' => [
      'menu' => [

      'title' => 'Menu',
      'icon' => 'quote',
      'component' => 'a17-block-menu',
      'path' => base_path('vendor/twill-packages/twill-menu/src/Twill/Capsules/Menus/resources/views/admin/blocks'),
      'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
      ],

                ],

            ]
        ],
        'repeaters' => [
            'menu-item' => [
                'title' => 'Aggiungi link',
                'trigger' => 'Aggiungi sottovoce',
                'component' => 'a17-block-menu-item',
                'path' => base_path('vendor/twill-packages/twill-menu/src/Twill/Capsules/Menus/resources/views/admin/blocks'),
                'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
            ],

        ],


- if you want to make changes use command bellow but you have to make changes in config to use twill default 
  
  - php artisan publish:vendor  --tag="twill-menu-views"
  - php artisan publish:vendor  --tag="twill-menu-controller"
  - php artisan publish:vendor  --tag="twill-menu-config"