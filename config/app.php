<?php

return [
    'env' => isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] ?: 'production',
    'debug' => isset($_ENV['APP_DEBUG']) && $_ENV['APP_DEBUG'] === 'true' ? true : false,
    'local' => 'fr_FR',
    'site' => [
        'name' => 'Single app',
        'url' => isset($_ENV['APP_DOMAIN']) && $_ENV['APP_DOMAIN'] ? 'http://' . $_ENV['APP_DOMAIN'] : 'https://www.locasion.fr',
        'slogan' => 'Mon super slogan.',
        'description' => 'Aliquam aperiam commodi corporis cumque, doloribus eveniet excepturi exercitationem expedita hic ipsum itaque nisi pariatur quibusdam quo rem soluta ullam.',
        'social_img_name' => 'social-share',
        'designer' => 'capetrel',
    ],
    'company' => [
        'name' => "Single app",
        'address' => '123 rue azerty - 12345 Tours',
    ],
    'contact' => [
        'name' => 'John Doe',
        'address' => '123 rue azerty - 12345 Tours',
        'mail' => 'john@doe.fr',
        'phone' => '01 23 45 67 89',
    ],
];
