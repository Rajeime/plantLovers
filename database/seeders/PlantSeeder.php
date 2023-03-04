<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plant::insert([
            [
                "user_id" => User::all()->random()->id,
                "common_name" => "Chinese Evergreen",
                "genus" => "Aglaonema",
                "species" => "Silver Queen",
                "img" => "https://seedplex.in/storage/2021/11/Aglaonema-Silver-Queen.webp",
                "user_id" => User::all()->random()->id,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => User::all()->random()->id,
                "common_name" => "Dumb Cane",
                "genus" => "Dieffenbacia",
                "species" => "Seguine",
                "img" => "https://seedplex.in/storage/2021/11/Aglaonema-Silver-Queen.webp",
                "user_id" => User::all()->random()->id,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => User::all()->random()->id,
                "common_name" => "Crown of Thornes",
                "genus" => "Euphorbia milii,",
                "species" => "Pieta",
                "img" => "https://seedplex.in/storage/2021/11/Aglaonema-Silver-Queen.webp",
                "user_id" => User::all()->random()->id,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => User::all()->random()->id,
                "common_name" => "Chinese Evergreen",
                "genus" => "Aglaonema",
                "species" => "Pink Panther",
                "img" => "https://seedplex.in/storage/2021/11/Aglaonema-Silver-Queen.webp",
                "user_id" => User::all()->random()->id,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}
