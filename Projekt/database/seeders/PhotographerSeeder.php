<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Photographer;
use App\Models\Photo;
use Carbon\Carbon;

class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Photographer::truncate();
        Photo::truncate();
        Schema::enableForeignKeyConstraints();
        Photographer::upsert(
            [
                [
                    'firstname' => 'Jakub', 'lastname' => 'Flis', 'birthdate' => Carbon::parse('06/12/1998'),
                    'description' => 'Ut vel sapien tristique, placerat diam ut, tempor dui. Praesent quam tortor, gravida at iaculis id, convallis sed metus.
                     Praesent in augue at ante volutpat hendrerit. Etiam convallis quis quam vel bibendum.
                     Fusce at erat eu nunc porttitor tincidunt. Sed eu justo quis odio laoreet dapibus. Curabitur vitae finibus lacus, in maximus massa.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Michał', 'lastname' => 'Pralka', 'birthdate' => Carbon::parse('09/12/1975'),
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                     Duis sit amet ante non tellus interdum dictum. Pellentesque rhoncus eu eros nec malesuada.
                     Fusce ut erat libero. Sed vitae volutpat ex. Morbi ultricies velit tincidunt odio convallis, et pharetra magna sodales.
                     Vivamus mi libero, iaculis et libero in, posuere dignissim dui. Cras tristique in risus et tempor.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Andżelina', 'lastname' => 'Żulie', 'birthdate' => Carbon::parse('07/12/1988'),
                    'description' => 'Mauris nisl ante, feugiat efficitur mattis eu, pulvinar in magna. Etiam maximus orci sed efficitur ullamcorper. 
                     Mauris id mauris enim. Suspendisse accumsan convallis risus ac tempor. Nam viverra placerat luctus.
                     Nullam blandit, mi id dapibus luctus, erat felis condimentum mi, at molestie ex libero vel tellus.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Nikola', 'lastname' => 'Kovac', 'birthdate' => Carbon::parse('08/12/1993'),
                    'description' => 'Suspendisse enim nibh, rhoncus sit amet euismod vel, cursus vel quam. 
                     Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                     Sed aliquet porttitor faucibus. Suspendisse potenti. Suspendisse commodo eros eu sagittis pellentesque.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Nikola', 'lastname' => 'Maslov', 'birthdate' => Carbon::parse('12/16/1999'),
                    'description' => 'Vestibulum at tristique eros. Nunc felis justo, iaculis ut dui id, porttitor egestas risus. Fusce efficitur ligula mauris,
                     ac cursus orci consectetur eu. Curabitur urna diam, congue eu metus in,
                     feugiat bibendum massa. Donec finibus mi vel sem finibus consectetur.
                     Mauris posuere vulputate erat id egestas. Quisque sagittis urna ut tortor vulputate, id ultrices lectus pellentesque.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Fryderyk', 'lastname' => 'Praczen', 'birthdate' => Carbon::parse('12/26/1976'),
                    'description' => 'Aliquam efficitur sagittis urna quis imperdiet. Vivamus at purus volutpat, efficitur massa vel, dapibus est.
                     Etiam eros nisl, semper quis convallis sed,
                     iaculis quis nunc. Proin a nisl mi. Vivamus sed ante non purus sagittis venenatis sit amet a orci.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Fryderyk', 'lastname' => 'Niece', 'birthdate' => Carbon::parse('12/30/1997'),
                    'description' => 'Aliquam erat volutpat. Fusce et mattis nibh, quis rutrum tortor. Aenean eros dolor, sollicitudin a commodo vel, gravida eget ante.
                     Aenean suscipit magna orci.
                     Integer ut porttitor tellus, euismod fringilla ante.
                     Sed aliquam vel massa quis lacinia. Fusce lacinia lectus ut pulvinar posuere.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Antoni', 'lastname' => 'Coolio', 'birthdate' => Carbon::parse('12/15/2000'),
                    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                     Vivamus a tempus ante. Etiam sit amet tortor vitae nunc sollicitudin venenatis a eu tellus. Vestibulum aliquam consectetur maximus.
                     Proin metus ex, dictum a mattis ut, molestie eget lectus. Nunc condimentum commodo elit nec viverra.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Monika', 'lastname' => 'London', 'birthdate' => Carbon::parse('12/24/1994'),
                    'description' => 'Nam et leo non augue faucibus egestas a ac quam. Morbi mi eros, tristique non vulputate ac,
                      iaculis sed dolor. Cras facilisis nisl diam, sed iaculis lectus pellentesque sed.
                      Morbi laoreet quis dui aliquam placerat. Vestibulum sollicitudin egestas nisl. Nulla facilisi. 
                      Aliquam tempus quam et aliquet tristique.', 'howmanysold' => rand(17, 289)
                ],
                [
                    'firstname' => 'Lukas', 'lastname' => 'Rossander', 'birthdate' => Carbon::parse('12/22/1990'),
                    'description' => 'Nunc sem tellus, varius sit amet aliquet quis, consectetur ac quam. Aliquam erat volutpat. Ut posuere venenatis nisi,
                     sit amet feugiat tortor aliquet a. Integer a elit ac lorem suscipit interdum et ac urna. Proin placerat mauris ut nisi sagittis aliquet.
                     Nulla eget ullamcorper libero. Sed bibendum magna lacus, vitae luctus ligula iaculis vitae.', 'howmanysold' => rand(17, 289)
                ]
            ],
            'name'
        );
    }
}
