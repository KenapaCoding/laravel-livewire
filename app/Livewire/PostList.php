<?php

namespace App\Livewire;

use Livewire\Component;

class PostList extends Component
{
    public $posts = [
        [
            'id' => 1,
            'title' => 'Belajar Livewire Dasar',
            'content' => 'Livewire memudahkan pengembangan frontend menggunakan Laravel.'
        ],
        [
            'id' => 2,
            'title' => 'Apa Itu Lifecycle Hook?',
            'content' => 'Lifecycle hook di Livewire memungkinkan kita menangani proses seperti inisialisasi data.'
        ],
        [
            'id' => 3,
            'title' => 'Penggunaan mount() di Livewire',
            'content' => 'mount() dipanggil saat komponen pertama kali dibuat dan digunakan untuk setup data.'
        ],
        [
            'id' => 4,
            'title' => 'Perbandingan mount() dan boot()',
            'content' => 'boot() digunakan untuk setup global, sementara mount() lebih spesifik untuk komponen.'
        ],
        [
            'id' => 5,
            'title' => 'Menampilkan Data Post di Komponen',
            'content' => 'Kita bisa menggunakan looping di blade untuk menampilkan data post ke user.'
        ],
    ];

    public function render()
    {
        return view('livewire.post-list');
    }
}
