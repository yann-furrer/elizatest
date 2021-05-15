<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'meal' => [
        'title' => 'Meals',

        'actions' => [
            'index' => 'Meals',
            'create' => 'New Meal',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'meal_name' => 'Meal name',
            'vegan' => 'Vegan',
            'time' => 'Time',
            'url' => 'Url',
            'img' => 'Img',
            
        ],
    ],

    'ingredient' => [
        'title' => 'Ingredients',

        'actions' => [
            'index' => 'Ingredients',
            'create' => 'New Ingredient',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'id_meal' => 'Id meal',
            'ing1' => 'Ing1',
            'ing2' => 'Ing2',
            'ing3' => 'Ing3',
            'ing4' => 'Ing4',
            'ing5' => 'Ing5',
            'ing6' => 'Ing6',
            'ing7' => 'Ing7',
            'ing8' => 'Ing8',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];