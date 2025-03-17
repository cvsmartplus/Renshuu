<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'Smart Home',
                'slug' => 'smart-home',
                'description' => 'Membangun Rumah Cerdas: Teknologi dan Integrasi Sistem',
                'price' => 100000,
                'discount' => 19,
                'trainers_name' => 'John Doe',
                'group_chat_link' => 'https://example.com/group1',
                'image' => 'https://picsum.photos/350/250?random=1',
                'duration' => 10,
                'level' => 'Beginner',
                'status' => 'Published',
                'student' => 100
            ],
            [
                'title' => 'Smart Farming',
                'slug' => 'smart-farming',
                'description' => 'Pertanian Cerdas: Inovasi Teknologi untuk Efisiensi dan Produktivitas',
                'price' => 50000,
                'discount' => 10,
                'trainers_name' => 'Jane Smith',
                'group_chat_link' => 'https://example.com/group2',
                'image' => 'https://picsum.photos/350/250?random=2',
                'duration' => 15,
                'level' => 'Intermediate',
                'status' => 'Published',
                'student' => 200
            ],
            [
                'title' => 'Smart City',
                'slug' => 'smart-city',
                'description' => 'Kota Pintar: Solusi Teknologi untuk Perkotaan yang Lebih Baik',
                'price' => 200000,
                'discount' => 15,
                'trainers_name' => 'Michael Brown',
                'group_chat_link' => 'https://example.com/group3',
                'image' => 'https://picsum.photos/350/250?random=3',
                'duration' => 20,
                'level' => 'Advanced',
                'status' => 'Published',
                'student' => 150
            ],
            [
                'title' => 'Smart Factory',
                'slug' => 'smart-factory',
                'description' => 'Transformasi Digital di Pabrik: Implementasi Smart Factory',
                'price' => 150000,
                'discount' => 20,
                'trainers_name' => 'Elom Musk',
                'group_chat_link' => 'https://example.com/group4',
                'image' => 'https://picsum.photos/350/250?random=4',
                'duration' => 25,
                'level' => 'Advanced',
                'status' => 'Published',
                'student' => 600
            ]
        ]);
    }
}
