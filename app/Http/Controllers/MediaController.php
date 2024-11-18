<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index() {
        $galleries = [
            [
                'image' => 'assets/img/galery/galery-1.webp',
                'title' => '19 Mei 2023. Jambore LPU Regional 3',
                'description' => '19 Mei 2023. Jambore LPU Regional 3 di Kampus Universitas Logistik Bisnis dan Internasional',
            ],
            [
                'image' => 'assets/img/galery/galery-2.webp',
                'title' => '13 Mei 2023 - Pelatihan Entrepreneurship ',
                'description' => '13 Mei 2023 - Pelatihan Entrepreneurship bagi karyawan dan karyawan Pra Purnabakti ',
            ],
            [
                'image' => 'assets/img/galery/galery-3.webp',
                'title' => '10 Mei 2023. Dies Natalis ke-1 Universitas Logistik dan Bisnis Indonesia ',
                'description' => 'Dies Natalis Ke-1 ULBI, Bandung, 10 Mei 2023',
            ],
            [
                'image' => 'assets/img/galery/galery-4.webp',
                'title' => '10 Mei 2023. PKS dengan Bank BRI di Point Lab Jakarta',
                'description' => '10 Mei 2023. PKS dengan Bank BRI di Point Lab Jakarta',
            ],
            [
                'image' => 'assets/img/galery/galery-5.webp',
                'title' => '8 Mei 2023. Apel Pagi di Kantor Pusat Cilaki',
                'description' => '8 Mei 2023. Apel Pagi di Kantor Pusat Cilaki',
            ],
            [
                'image' => 'assets/img/galery/galery-6.webp',
                'title' => '5 Mei 2023. Rapim Q1 hari ke-2',
                'description' => '5 Mei 2023. Rapim Q1 hari ke-2',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];
        return view('pages.media', compact('galleries'));
    }
}