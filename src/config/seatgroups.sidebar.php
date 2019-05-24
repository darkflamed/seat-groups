<?php

return [
    'seatgroups' => [
        'name'          => 'SeAT Groups',
        'label'         => 'Groups Manager',
        'icon'          => 'fa-group',
        'route_segment' => 'seatgroups',
        'permission'    => 'seatgroups.view',
        'entries' => [
            [
                'name'  => 'SeAT Groups',
                'label' => 'Groups Manager',
                'icon'  => 'fa-gear',
                'route' => 'seatgroups.index',
                'permission'    => 'seatgroups.view',
            ],
            [
                'name'  => 'About',
                'icon'  => 'fa-info-circle',
                'permission' => 'seatgroups.view',
                'route' => 'seatgroups.about',
            ],
        ],
    ],
];
