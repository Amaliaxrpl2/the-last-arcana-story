<?php

return [
    'opening' => [
        'title' => 'The Unopened Invitation',
        'chapter' => 'Prologue',
        'text' => 'Hujan telah berhenti ketika sebuah amplop hitam ditemukan di depan pintumu. Tidak ada nama pengirim. Hanya sebuah simbol yang tampak berbeda setiap kali kau mencoba mengingat bentuknya.',
        'choices' => [
            [
                'text' => 'Membuka amplop.',
                'next' => 'letter',
                'flag' => 'opened_letter'
            ],
            [
                'text' => 'Memeriksa simbolnya.',
                'next' => 'symbol',
                'flag' => 'examined_symbol'
            ],
            [
                'text' => 'Meninggalkannya.',
                'next' => 'departure',
                'flag' => 'ignored_invitation'
            ]
        ]
    ],

    'letter' => [
        'title' => 'A Message Without a Sender',
        'chapter' => 'Fragment I',
        'text' => 'Di dalam amplop, kau menemukan selembar kertas. Kalimat di atasnya tampak biasa saja, sampai kau menyadari bahwa tulisan itu menggunakan sesuatu yang menyerupai tulisan tanganmu sendiri.',
        'choices' => [
            [
                'text' => 'Menyimpan surat itu.',
                'next' => 'hallway',
                'flag' => 'kept_letter'
            ],
            [
                'text' => 'Mencari tahu siapa penulisnya.',
                'next' => 'hallway',
                'flag' => 'searched_sender'
            ]
        ]
    ],

    'symbol' => [
        'title' => 'The Unfamiliar Mark',
        'chapter' => 'Fragment II',
        'text' => 'Simbol itu terdiri dari beberapa garis yang saling bertemu. Kau yakin pernah melihatnya. Namun, setiap kali mencoba mengingat di mana, sebuah bagian dari ingatanmu terasa kosong.',
        'choices' => [
            [
                'text' => 'Menggambar ulang simbol tersebut.',
                'next' => 'hallway',
                'flag' => 'copied_symbol'
            ],
            [
                'text' => 'Berhenti memandangnya.',
                'next' => 'hallway',
                'flag' => 'avoided_symbol'
            ]
        ]
    ],

    'departure' => [
        'title' => 'An Unfinished Departure',
        'chapter' => 'Fragment III',
        'text' => 'Kau meninggalkan amplop itu dan menutup pintu. Beberapa menit kemudian, terdengar ketukan dari sisi lain. Ketika kau membuka pintu, lorong itu tampak lebih panjang daripada sebelumnya.',
        'choices' => [
            [
                'text' => 'Melangkah ke lorong.',
                'next' => 'hallway',
                'flag' => 'entered_hallway'
            ]
        ]
    ],

    'hallway' => [
        'title' => 'The Corridor',
        'chapter' => 'Chapter I',
        'text' => 'Di ujung lorong berdiri sebuah pintu yang tidak pernah ada sebelumnya. Dari baliknya terdengar suara yang menyebut sesuatu yang tidak kau ingat pernah kau ceritakan kepada siapa pun.',
        'choices' => [
            [
                'text' => 'Mendekati pintu.',
                'next' => 'threshold',
                'flag' => 'approached_door'
            ],
            [
                'text' => 'Mengamati lorong sekali lagi.',
                'next' => 'threshold',
                'flag' => 'observed_hallway'
            ]
        ]
    ],

    'threshold' => [
        'title' => 'Beyond the Threshold',
        'chapter' => 'Chapter II',
        'text' => 'Pintu itu terbuka sebelum kau menyentuhnya. Di baliknya tidak ada ruangan, hanya kegelapan dan sebuah kalimat yang muncul perlahan: You were expected.',
        'choices' => [
            [
                'text' => 'Melangkah masuk.',
                'next' => 'opening',
                'flag' => 'entered_threshold'
            ]
        ]
    ]
];
