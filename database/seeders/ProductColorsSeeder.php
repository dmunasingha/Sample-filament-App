<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //Web Safe Colors
        $colors = [
            ['name' => 'White', 'hex' => '#FFFFFF'],
            ['name' => 'Black', 'hex' => '#000000'],
            ['name' => 'Red', 'hex' => '#FF0000'],
            ['name' => 'Green', 'hex' => '#00FF00'],
            ['name' => 'Blue', 'hex' => '#0000FF'],
            ['name' => 'Yellow', 'hex' => '#FFFF00'],
            ['name' => 'Cyan', 'hex' => '#00FFFF'],
            ['name' => 'Magenta', 'hex' => '#FF00FF'],
            ['name' => 'Silver', 'hex' => '#C0C0C0'],
            ['name' => 'Gray', 'hex' => '#808080'],
            ['name' => 'Maroon', 'hex' => '#800000'],
            ['name' => 'Olive', 'hex' => '#808000'],
            ['name' => 'Dark Green', 'hex' => '#008000'],
            ['name' => 'Dark Cyan', 'hex' => '#008080'],
            ['name' => 'Navy', 'hex' => '#000080'],
            ['name' => 'Purple', 'hex' => '#800080'],
            ['name' => 'Light Gray', 'hex' => '#D3D3D3'],
            ['name' => 'Dark Gray', 'hex' => '#A9A9A9'],
            ['name' => 'Light Red', 'hex' => '#FF3333'],
            ['name' => 'Light Green', 'hex' => '#33FF33'],
            ['name' => 'Light Blue', 'hex' => '#3333FF'],
            ['name' => 'Light Yellow', 'hex' => '#FFFF33'],
            ['name' => 'Light Cyan', 'hex' => '#33FFFF'],
            ['name' => 'Light Magenta', 'hex' => '#FF33FF'],
            ['name' => 'Dark Red', 'hex' => '#CC0000'],
            ['name' => 'Dark Blue', 'hex' => '#0000CC'],
            ['name' => 'Dark Yellow', 'hex' => '#CCCC00'],
            ['name' => 'Dark Cyan', 'hex' => '#00CCCC'],
            ['name' => 'Dark Magenta', 'hex' => '#CC00CC'],
            ['name' => 'Medium Gray', 'hex' => '#999999'],
            ['name' => 'Light Purple', 'hex' => '#CC33CC'],
            ['name' => 'Light Olive', 'hex' => '#999900'],
            ['name' => 'Dark Purple', 'hex' => '#660066'],
            ['name' => 'Dark Olive', 'hex' => '#666600'],
            ['name' => 'Teal', 'hex' => '#006666'],
            ['name' => 'Orange', 'hex' => '#FF6600'],
            ['name' => 'Dark Orange', 'hex' => '#CC6600'],
            ['name' => 'Light Orange', 'hex' => '#FF9900'],
            ['name' => 'Pink', 'hex' => '#FF6666'],
            ['name' => 'Light Pink', 'hex' => '#FF9999'],
            ['name' => 'Violet', 'hex' => '#9933CC'],
            ['name' => 'Light Violet', 'hex' => '#CC99CC']
        ];

        foreach ($colors as $c) {
            \App\Models\ProductColor::updateOrCreate(['hex' => $c['hex']], $c);
        }
    }
}
