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
            'department_id' => 1,
            'name' => 'afghany',
            'gpa' => rand(1,3) + rand(0, 9) / 10,
        ],
        [
            'c_id' => '42015039',
            'password' => 'belal',
            'department_id' => 1,
            'name' => 'belal',
            'gpa' => rand(1,3) + rand(0, 9) / 10,
        ],
        [
            'c_id' => '42015098',
            'password' => 'abora',
            'department_id' => 1,
            'name' => 'mahmoud',
            'gpa' => rand(1,3) + rand(0, 9) / 10,
        ],
        [
            'c_id' => '42016071',
            'password' => 'sameh',
            'department_id' => 1,
            'name' => 'ahmed',
            'gpa' => rand(1,3) + rand(0, 9) / 10,
        ],
        [
            'c_id' => '4201662',
            'password' => 'nehal',
            'department_id' => 1,
            'name' => 'nehal',
            'gpa' => rand(1,3) + rand(0, 9) / 10,
        ]
    ],

    'managers' => [
        [
            'name' => 'eid',
            'c_id' => '111112',
            'password' => '123456',
            'department_id' => 1,
            'role' => 1
        ],
        [
            'name' => 'ranya',
            'c_id' => '111113',
            'password' => '123456',
            'department_id' => 2,
            'role' => 1
        ],
        [
            'name' => 'hosny',
            'c_id' => '111114',
            'password' => '123456',
            'department_id' => 3,
            'role' => 1
        ],
        [
            'name' => 'afghany',
            'c_id' => '111111',
            'password' => 'afghany',
            'department_id' => null,
            'role' => 2,
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
            'department_id' => 1
        ],
        [
            'name' => 'DS',
            'code' => 'csc 210',
            'units' => 3,
            'department_id' => 1
        ],
        [
            'name' => 'os',
            'code' => 'csc 310',
            'units' => 3,
            'department_id' => 1
        ],
        [
            'name' => 'DSS',
            'code' => 'INF 222',
            'units' => 3,
            'department_id' => 1
        ],
        [
            'name' => 'software 1',
            'code' => 'csc 320',
            'units' => 4,
            'department_id' => 1
        ],
        [
            'name' => 'software 2',
            'code' => 'csc 414',
            'units' => 4,
            'department_id' => 1
        ],
        [
            'name' => 'computer network',
            'code' => 'csc 221',
            'units' => 3,
            'department_id' => 1
        ],
        [
            'name' => 'system expert',
            'code' => 'csc 420',
            'units' => 3,
            'department_id' => 1
        ],
        [
            'name' => 'Database',
            'code' => 'INF 410',
            'units' => 4,
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
