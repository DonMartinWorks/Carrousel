<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create(['url' => 'https://via.placeholder.com/800x400?text=Imagen+1']);
        Image::create(['url' => 'https://via.placeholder.com/800x400?text=Imagen+2']);
        Image::create(['url' => 'https://via.placeholder.com/800x400?text=Imagen+3']);
        Image::create(['url' => 'https://via.placeholder.com/800x400?text=Imagen+4']);
        Image::create(['url' => 'https://via.placeholder.com/800x400?text=Imagen+5']);
    }
}
