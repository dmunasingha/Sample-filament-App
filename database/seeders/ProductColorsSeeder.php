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
            ['name' => 'White', 'hex_code' => '#FFFFFF'],
            ['name' => 'Black', 'hex_code' => '#000000'],
            ['name' => 'Red', 'hex_code' => '#FF0000'],
            ['name' => 'Green', 'hex_code' => '#00FF00'],
            ['name' => 'Blue', 'hex_code' => '#0000FF'],
            ['name' => 'Yellow', 'hex_code' => '#FFFF00'],
            ['name' => 'Cyan', 'hex_code' => '#00FFFF'],
            ['name' => 'Magenta', 'hex_code' => '#FF00FF'],
            ['name' => 'Silver', 'hex_code' => '#C0C0C0'],
            ['name' => 'Gray', 'hex_code' => '#808080'],
            ['name' => 'Maroon', 'hex_code' => '#800000'],
            ['name' => 'Olive', 'hex_code' => '#808000'],
            ['name' => 'Dark Green', 'hex_code' => '#008000'],
            ['name' => 'Dark Cyan', 'hex_code' => '#008080'],
            ['name' => 'Navy', 'hex_code' => '#000080'],
            ['name' => 'Purple', 'hex_code' => '#800080'],
            ['name' => 'Light Gray', 'hex_code' => '#D3D3D3'],
            ['name' => 'Dark Gray', 'hex_code' => '#A9A9A9'],
            ['name' => 'Light Red', 'hex_code' => '#FF3333'],
            ['name' => 'Light Green', 'hex_code' => '#33FF33'],
            ['name' => 'Light Blue', 'hex_code' => '#3333FF'],
            ['name' => 'Light Yellow', 'hex_code' => '#FFFF33'],
            ['name' => 'Light Cyan', 'hex_code' => '#33FFFF'],
            ['name' => 'Light Magenta', 'hex_code' => '#FF33FF'],
            ['name' => 'Dark Red', 'hex_code' => '#CC0000'],
            ['name' => 'Dark Blue', 'hex_code' => '#0000CC'],
            ['name' => 'Dark Yellow', 'hex_code' => '#CCCC00'],
            ['name' => 'Dark Cyan', 'hex_code' => '#00CCCC'],
            ['name' => 'Dark Magenta', 'hex_code' => '#CC00CC'],
            ['name' => 'Medium Gray', 'hex_code' => '#999999'],
            ['name' => 'Light Purple', 'hex_code' => '#CC33CC'],
            ['name' => 'Light Olive', 'hex_code' => '#999900'],
            ['name' => 'Dark Purple', 'hex_code' => '#660066'],
            ['name' => 'Dark Olive', 'hex_code' => '#666600'],
            ['name' => 'Teal', 'hex_code' => '#006666'],
            ['name' => 'Orange', 'hex_code' => '#FF6600'],
            ['name' => 'Dark Orange', 'hex_code' => '#CC6600'],
            ['name' => 'Light Orange', 'hex_code' => '#FF9900'],
            ['name' => 'Pink', 'hex_code' => '#FF6666'],
            ['name' => 'Light Pink', 'hex_code' => '#FF9999'],
            ['name' => 'Violet', 'hex_code' => '#9933CC'],
            ['name' => 'Light Violet', 'hex_code' => '#CC99CC']
        ];

        foreach ($colors as $c) {
            \App\Models\ProductColor::updateOrCreate($c);
        }
    }
}
