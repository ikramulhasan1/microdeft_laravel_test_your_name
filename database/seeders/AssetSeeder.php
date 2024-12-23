<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{

    public function run(): void
    {
        $assets = [
            ['name' => 'Mouse', 'status' => 'true'],
            ['name' => 'Keyboard', 'status' => 'true'],
            ['name' => 'Monitor', 'status' => 'true'],
            ['name' => 'CPU', 'status' => 'true'],
            ['name' => 'Water bottle', 'status' => 'true'],
            ['name' => 'Tissue paper', 'status' => 'true'],
            ['name' => 'table fan', 'status' => 'true'],

        ];

        foreach ($assets as $asset) {
            \App\Models\Asset::create($asset);
        }
    }
}
