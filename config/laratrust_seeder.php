<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin_nurse' => [
            'residentprofile' => 'c,r,u,d',
            'bhws' => 'c,r,u,d',
            'myprofile' => 'r,u',
            'healthconsultation' => 'c,r,u,d',
            'events' => 'c,r,u,d',
            'purok' => 'c,r,u,d',
            'familynumbering' => 'c,r,u,d',
            'medicinerequest' => 'c,r,u,d',
            'reports' => 'c,r,u,d'
        ],
        'bhw' => [
            'residentprofile' => 'c,r,u,d',
            'myprofile' => 'r,u',
            'events' => 'c,r,u,d',
            'purok' => 'c,r,u,d',
            'familynumbering' => 'c,r,u,d',
            'reports' => 'r,u'
        ],        
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
