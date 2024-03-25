<?php

//enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'vpnhunt_enqueue_scripts' );
function vpnhunt_enqueue_scripts() {
    
    //enqueue styles
    wp_enqueue_style(   'stylesheet', __DIR__ . '/package/node_modules/bootstrap/js/dist/css/bootstrap.min.css', array(), date_default_timezone_get() );
    wp_enqueue_style(   'stylesheet', __DIR__ . '/style.css', array(), date_default_timezone_get() );
    
    //enqueue scripts
    wp_enqueue_script(  'bootstrap', __DIR__ . '/package/node_modules/bootstrap/js/dist/js/bootstrap-bundle.min.js', array( 'jquery' ), date_default_timezone_get(), true );
    wp_enqueue_script(  'jquery-validate', __DIR__ . '/assets/js/jquery.validate.min.js', array( 'bootstrap' ), date_default_timezone_get(), true );
    wp_enqueue_script(  'jquery-validate', __DIR__ . '/assets/js/custom.js', array( 'slick' ), date_default_timezone_get(), true );
    wp_localize_script( 'custom', 'front_urls', array( 'theme_url' => get_site_url() . '/wp-content/themes/vpnhunt-theme', 'ajaxUrl' => admin_url( 'admin-ajax.php') ) );
    
}


/*
{
    "explorer.confirmDelete": false,
    "diffEditor.wordWrap": "on",
    "terminal.integrated.persistentSessionScrollback": 0,
    "diffEditor.ignoreTrimWhitespace": false,
    "terminal.integrated.persistentSessionReviveProcess": "onExitAndWindowClose",
    "terminal.integrated.tabs.title": "${process}${cwd}",
    "terminal.integrated.defaultProfile.windows": "Git Bash",
    "restoreTerminals.keepExistingTerminalsOpen": true,
    "restoreTerminals.terminals": [


        {
          "splitTerminals": [
            {
              "name": "Property Frontend",
              "commands": ["cd property/angular", "ng serve"]
            }
          ]
        },
        {
          "splitTerminals": [
            {
              "name": "Property Backend",
              "commands": ["cd property/backend", "nodemon"]
            }
          ]
        },
        {
          "splitTerminals": [
            {
              "name": "",
              "commands": ["cd laravel", "php artisan serve --port='8080'"]
            }
          ]
        },
        {
          "splitTerminals": [
            {
              "name": "Angular CMD",
              "commands": ["cd property/angular", ""]
            }
          ]
        }
      ],
      
}
*/