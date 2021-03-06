<?php

return [

    'title'  => 'Task List',
    'author' => 'Laravel Verona',

    /*
    |--------------------------------------------------------------------------
    | ACTIONS
    |--------------------------------------------------------------------------
    */
    'actions' => [
        'create' => 'Create',
        'update' => 'Update',
        'delete' => 'Delete',
        'save'   => 'Save',
        'close'  => 'Close',
    ],

    /*
    |--------------------------------------------------------------------------
    | COMMON
    |--------------------------------------------------------------------------
    */
    'common' => [
        'author'     => 'Author',
        'editor'     => 'Editor',
        'created_at' => 'Created at',
        'created_by' => 'Created by',
        'updated_at' => 'Updated at',
        'updated_by' => 'Updated by',
        'confirm'    => 'Are you sure you want to continue?',
    ],

    /*
    |--------------------------------------------------------------------------
    | AUTH
    |--------------------------------------------------------------------------
    */
    'auth' => [
        'login' => [
            'title'    => 'Login',
            'submit'   => 'Sign in',
            'remember' => 'Remember me',
            'register' => 'Register now',

            'fields' => [
                'email'    => 'Email',
                'password' => 'Password',
            ],
        ],
        'register' => [
            'title'  => 'Register',
            'submit' => 'Sign up',
            'login'  => 'Back to login',

            'fields' => [
                'name'                  => 'Name',
                'email'                 => 'Email',
                'password'              => 'Password',
                'password_confirmation' => 'Password confirmation',
            ],
        ],

        'logout' => 'Logout'
    ],

    /*
    |--------------------------------------------------------------------------
    | TASKS
    |--------------------------------------------------------------------------
    */
    'tasks' => [
        'title'  => 'Tasks',
        'sing'   => 'Task',
        'insert' => 'Insert a new task here ...',
        'empty'  => 'No task was created yet',

        'fields' => [
            'name' => 'Name',
            'done' => 'Done',
        ],

        'message' => [
            'create_success' => 'Task created successfully.',
            'update_success' => 'Task updated successfully.',
            'delete_success' => 'Task deleted successfully.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | USERS
    |--------------------------------------------------------------------------
    */
    'users' => [
        'title' => 'Users',
        'empty' => 'No users was created yet',

        'fields' => [
            'id'    => 'ID',
            'name'  => 'Name',
            'email' => 'Email',
        ],
    ],
];
