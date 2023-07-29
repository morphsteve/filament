<?php

return [

    'title' => '登录',

    'heading' => '登录您的账号',

    'form' => [

        'email' => [
            'label' => '邮箱地址',
        ],

        'password' => [
            'label' => '密码',
        ],

        'remember' => [
            'label' => '记住我',
        ],

        'actions' => [

            'authenticate' => [
                'label' => '登录',
            ],

        ],

    ],

    'notifications' => [
        'failed' => '登录凭证与记录不符。',
        'throttled' => '尝试登录次数过多，请在 :seconds 秒后重试。',
    ],

];
