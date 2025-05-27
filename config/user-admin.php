<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default User Password
    |--------------------------------------------------------------------------
    |
    | This value will be used as the initial password for new users or for
    | accounts that have been reset. It is strongly recommended to prompt
    | users to change this password after first login.
    |
    */
    'default-password' => '0000',

    /*
    |--------------------------------------------------------------------------
    | Default User Color
    |--------------------------------------------------------------------------
    |
    | The default color assigned to a user, defined as a HEX value.
    | This can be used for visual identification in UI elements,
    | charts, or labels throughout the application.
    |
    */
    'default-color' => '#000000',

    /*
    |--------------------------------------------------------------------------
    | User Parameters
    |--------------------------------------------------------------------------
    |
    | These are customizable parameters assigned to individual users.
    | Each parameter represents a type of data, such as a model reference
    | or a simple string value. The configuration defines whether the parameter
    | allows multiple values, if it is read-only, how it should be displayed,
    | and optional role restrictions for visibility.
    |
    | How to fill parameters:
    | - 'key'           => The database key for the parameter (no special chars)
    | - 'label'         => Display label in the UI form
    | - 'is_multiple'   => Whether multiple values can be selected (true/false)
    | - 'type'          => The data type, e.g. 'model' or 'string'
    | - 'type_detail'   => The model class if 'type' is 'model', otherwise empty
    | - 'option_label'  => The attribute to display in select options
    | - 'is_readonly'   => If true, field is disabled for editing
    | - 'role'          => (optional) Restrict visibility to users with this role
    */

    'parameters' => [
        [
            'key' => 'department',
            'label' => 'Oddelenie',
            'is_multiple' => true,
            'type' => 'model',
            'type_detail' => Dpb\DatahubSync\Models\Department::class,
            'option_label' => 'title',
            'is_readonly' => false,
        ],
        [
            'key' => 'employees',
            'label' => 'Zamestnanec',
            'is_multiple' => false,
            'type' => 'model',
            'type_detail' => Dpb\DatahubSync\Models\Employee::class,
            'option_label' => 'fullName',
            'is_readonly' => false,
        ],
    ],
];
