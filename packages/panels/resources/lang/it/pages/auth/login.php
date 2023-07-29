<?php

return [

    'title' => 'Login',

    'heading' => 'Accedi al tuo account',

    'form' => [

        'email' => [
            'label' => 'Indirizzo Email',
        ],

        'password' => [
            'label' => 'Password',
        ],

        'remember' => [
            'label' => 'Ricordami',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Accedi',
            ],

        ],

    ],

    'notifications' => [
        'failed' => 'I tuoi dati di accesso non sono corretti.',
        'throttled' => 'Troppi tentativi di accesso. Riprova tra :seconds secondi.',
    ],

];
