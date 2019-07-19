<?php

return [

    'departments' => [
        [
            'name' => 'computer science',
            'manager_id' => 1
        ],
        [
            'name' => 'engineering',
            'manager_id' => 2

        ],
        [
            'name' => 'business management',
            'manager_id' => 3

        ],
    ],

    'students' => [
        [
            'c_id' => '42015085',
            'password' => 'afghany',
            'department_id' => 1
        ],
        [
            'c_id' => '42015039',
            'password' => 'belal',
            'department_id' => 1
        ],
        [
            'c_id' => '42015098',
            'password' => 'abora',
            'department_id' => 1
        ],
        [
            'c_id' => '42016071',
            'password' => 'sameh',
            'department_id' => 1
        ],
        [
            'c_id' => '4201662',
            'password' => 'nehal',
            'department_id' => 1
        ]
    ],

    'managers' => [
        [
            'name' => 'eid',
            'email' => 'eid@admin.com',
            'password' => '123456',
            'department_id' => 1,
            'role' => 1
        ],
        [
            'name' => 'ranya',
            'email' => 'ranya@admin.com',
            'password' => '123456',
            'department_id' => 2,
            'role' => 1
        ],
        [
            'name' => 'hosny',
            'email' => 'hosny@admin.com',
            'password' => '123456',
            'department_id' => 3,
            'role' => 1
        ],
        [
            'name' => 'afghany',
            'email' => 'afghany@admin.com',
            'password' => 'afghany',
            'department_id' => null,
            'role' =>2
        ]
    ],
    'doctors' => [
        [
            'name' => 'eid'
        ],
        [
            'name' => 'rania'
        ],
        [
            'name' => 'hosny el motafy'
        ],
        [
            'name' => 'mohamed el demrdash'
        ],
        [
            'name' => 'osama hamed'
        ],
    ],

    'assistants' => [
        [
            'name' => 'sara soliman'
        ],
        [
            'name' => 'mona'
        ],
        [
            'name' => 'shimaa'
        ],
        [
            'name' => 'nadien'
        ],
        [
            'name' => 'karem shamekh'
        ],
        [
            'name' => 'kamal elnahas'
        ],
        [
            'name' => 'nabil'
        ]
    ],

    'subjects' => [
        [
            'name' => 'OOP',
            'code' => 'csc 220',
            'units' => 4,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'DS',
            'code' => 'csc 210',
            'units' => 3,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'os',
            'code' => 'csc 310',
            'units' => 3,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'DSS',
            'code' => 'INF 222',
            'units' => 3,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'software 1',
            'code' => 'csc 320',
            'units' => 4,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'software 2',
            'code' => 'csc 414',
            'units' => 4,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'computer network',
            'code' => 'csc 221',
            'units' => 3,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'system expert',
            'code' => 'csc 420',
            'units' => 3,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
        [
            'name' => 'Database',
            'code' => 'INF 410',
            'units' => 4,
            'image' => 'images/subjects/default.jpg',
            'department_id' => 1
        ],
    ],

    'groups' => [
        [
            'number' => 1,
        ],
        [
            'number' => 2,
        ],
        [
            'number' => 3,
        ],
        [
            'number' => 4,
        ],
    ],
];
