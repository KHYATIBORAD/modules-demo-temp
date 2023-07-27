<?php

return [
    'name' => 'Demo',
    'activator'       => 'file',

    'database_management' => [
    'enabled' => true,
    'update_file_to_database_when_updating' => true, // Option to update module.json into database when updating a module.
    'repository' => null // or using your own example: ModuleRepository::class
],

    'default_version' => '1.0.0'
];
