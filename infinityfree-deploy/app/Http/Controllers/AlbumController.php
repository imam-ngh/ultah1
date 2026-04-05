<?php

namespace App\Http\Controllers;

class AlbumController
{
    /**
     * Show the album page with memories
     */
    public function index()
    {
        $memories = [
            [
                'id' => 1,
                'image' => '/images/memory-1.jpg',
                'title' => 'Kenangan Pertama',
                'caption' => 'Hari ketika cinta dimulai. Hari spesial dimana aku pertama kali melihatmu...',
                'date' => 'Tahun 2024',
            ],
            [
                'id' => 2,
                'image' => '/images/memory-2.jpg',
                'title' => 'Senyuman Terindah',
                'caption' => 'Senyumanmu membuat segala sesuatu menjadi indah. Seperti pelangi di tengah hujan.',
                'date' => 'Musim Semi',
            ],
            [
                'id' => 3,
                'image' => '/images/memory-3.jpg',
                'title' => 'Petualangan Bersama',
                'caption' => 'Setiap petualangan bersamamu adalah cerita yang ingin aku ingat selamanya.',
                'date' => 'Musim Panas',
            ],
            [
                'id' => 4,
                'image' => '/images/memory-4.jpg',
                'title' => 'Malam Berbintang',
                'caption' => 'Di bawah bintang, aku janji selamanya untuk mencintaimu dengan sepenuh hati.',
                'date' => 'Malam Romantis',
            ],
            [
                'id' => 5,
                'image' => '/images/memory-5.jpg',
                'title' => 'Kehangatan Dekatmu',
                'caption' => 'Dekatmu adalah tempat teraman dan tersenyaman di dunia.',
                'date' => 'Setiap Hari',
            ],
            [
                'id' => 6,
                'image' => '/images/memory-6.jpg',
                'title' => 'Masa Depan Kita',
                'caption' => 'Aku bermimpi tentang masa depan kita yang penuh dengan cinta dan kebahagiaan.',
                'date' => 'Selamanya',
            ],
        ];

        return view('album.index', [
            'memories' => $memories,
        ]);
    }

    /**
     * Get memory detail (untuk AJAX)
     */
    public function getMemory($id)
    {
        $memories = [
            [
                'id' => 1,
                'image' => '/images/memory-1.jpg',
                'title' => 'Kenangan Pertama',
                'caption' => 'Hari ketika cinta dimulai. Hari spesial dimana aku pertama kali melihatmu...',
                'fullCaption' => 'Kenangan indah dari hari pertama kita bertemu. Momen yang akan selamanya tersimpan di hati ini.',
            ],
            [
                'id' => 2,
                'image' => '/images/memory-2.jpg',
                'title' => 'Senyuman Terindah',
                'caption' => 'Senyumanmu membuat segala sesuatu menjadi indah. Seperti pelangi di tengah hujan.',
                'fullCaption' => 'Setiap kali senyuman itu terpancar, dunia seolah berhenti berputar.',
            ],
            [
                'id' => 3,
                'image' => '/images/memory-3.jpg',
                'title' => 'Petualangan Bersama',
                'caption' => 'Setiap petualangan bersamamu adalah cerita yang ingin aku ingat selamanya.',
                'fullCaption' => 'Petualangan tanpa henti mengelilingi dunia bersamamu adalah impian yang aku ingin terwujudkan.',
            ],
            [
                'id' => 4,
                'image' => '/images/memory-4.jpg',
                'title' => 'Malam Berbintang',
                'caption' => 'Di bawah bintang, aku janji selamanya untuk mencintaimu dengan sepenuh hati.',
                'fullCaption' => 'Bintang-bintang saksi dari janji cintaku yang abadi untuk dirimu.',
            ],
            [
                'id' => 5,
                'image' => '/images/memory-5.jpg',
                'title' => 'Kehangatan Dekatmu',
                'caption' => 'Dekatmu adalah tempat teraman dan tersenyaman di dunia.',
                'fullCaption' => 'Dalam pelukanmu, aku menemukan rumah yang telah lama aku cari.',
            ],
            [
                'id' => 6,
                'image' => '/images/memory-6.jpg',
                'title' => 'Masa Depan Kita',
                'caption' => 'Aku bermimpi tentang masa depan kita yang penuh dengan cinta dan kebahagiaan.',
                'fullCaption' => 'Masa depan kita adalah kanvas kosong yang siap kita lukis dengan warna-warna cinta.',
            ],
        ];

        $memory = collect($memories)->firstWhere('id', $id);

        return response()->json($memory ?? ['error' => 'Memory not found'], $memory ? 200 : 404);
    }
}
