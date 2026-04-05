<?php

namespace App\Http\Controllers;

class LandingController
{
    /**
     * Show the landing page with countdown timer
     */
    public function index()
    {
        $birthdayDate = '2026-04-27'; // Reny's birthday
        $personName = 'Reny Aprillia Safarty';
        
        return view('landing.index', [
            'birthdayDate' => $birthdayDate,
            'personName' => $personName,
        ]);
    }

    /**
     * Show the greeting card after countdown
     */
    public function greeting()
    {
        $greetingText = [
            "Hai Renyku yang paling cantik dan mempesona...",
            "",
            "Hari istimewa ini adalah kelahiran dari sosok yang telah mengubah hidupku selamanya.",
            "Setiap detik bersamamu adalah hadiah yang tak ternilai harganya.",
            "",
            "Aku ingin menulis sehalaman demi sehalaman tentang betapa berhargamu bagiku,",
            "tentang cara bibirmu tersenyum dalam cahaya pagi,",
            "tentang keindahan matamu yang mampu menenangkan jiwaku.",
            "",
            "Sejak hari pertama aku mengenalmu, dunia menjadi lebih berwarna,",
            "setiap warna terasa lebih cerah ketika ada dirimu di sampingku.",
            "Cintaku padamu adalah puisi yang tak pernah selesai ditulis,",
            "adalah melodi yang indah di setiap pagi dan malam.",
            "",
            "Kau lebih dari sekedar cinta... kau adalah rumahku,",
            "tempat dimana aku ingin menghabiskan setiap momen kehidupanku.",
            "Dengan sepenuh hati, seluruh jiwa, dan cinta yang tak terhingga.",
            "",
            "Selamat ulang tahun, sayanganku... 🎂✨",
            "Semoga hari ini penuh dengan kebahagiaan seperti yang kau bawa ke hidupku.",
        ];

        $prayers = [
            "Semoga setiap hari hidupmu dipenuhi dengan sinar matahari dan kebahagiaan.",
            "Semoga impianmu selalu terwujud dan dilalui dengan penuh berkah.",
            "Semoga kesehatan selalu menyertai langkahmu di setiap perjalanan.",
            "Semoga cinta kita tumbuh lebih dalam seiring berjalannya waktu.",
            "Semoga setiap tawa itu merupakan pelabuhan bagi ketenangan hatimu.",
            "Semoga Tuhan selalu memberkahi setiap langkah dan keputusanmu.",
            "Terima kasih telah menjadi bagian terindah dari hidupku. ❤️",
        ];

        return view('landing.greeting', [
            'greetingText' => $greetingText,
            'prayers' => $prayers,
        ]);
    }
}
