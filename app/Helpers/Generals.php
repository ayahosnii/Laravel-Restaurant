<?php

/*
 *
 "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        }, "files": [
            "App/Helpers/Generals.php"
        ]
    },
 * */
//https://github.com/barryvdh/laravel-ide-helper

    function get_languages()
    {
        return \App\Models\admin\Language::active()->selection()->get();
    }

    function get_default_language()
    {
        return Config::get('app.locale');
    }

    function uploadImages($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        $path = 'images/' . $folder . '/' .$filename;
        return $path;
    }
