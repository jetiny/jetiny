<?php

return [
    'request' => [

    ],
    'response' => [

    ],
    'router' =>[
        'namespace' => '\Demo\Action',
        'routers' => [
            'get' =>[
                ['/', 'index:index']
            ]
        ]
    ],
];