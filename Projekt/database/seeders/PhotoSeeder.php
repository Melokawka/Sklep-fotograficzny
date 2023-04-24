<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Photo;
use Carbon\Carbon;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        Photo::upsert(
            [
                [
                    'name' => 'Impresja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Claude w kolebce', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Ambasada', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Fantazja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Poezja Kołokształtna', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Ambicja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Refrezja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Magiczna kropla', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Tajemnica', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Regresja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Kołowrotny cykl', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Ochota', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Włochy', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Frytterinho', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Randomacja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Obsesja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Melancholijne kolory w najulotniejszej z chwil.',
                    'price' => 19.99, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Dusza natury', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Medytacja', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Krotność', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Cud narodzin w humorze autora.',
                    'price' => 60.00, 'photographer_id' => rand(1, 10)
                ],
                [
                    'name' => 'Prądy duchowe', 'dayofupload' => Carbon::now()->format('Y-m-d H:i:s'), 'description' => 'Kształt kształtowania kształtu polityki',
                    'price' => 18.00, 'photographer_id' => rand(1, 10)
                ]

            ],
            'name'
        );
    }
}
