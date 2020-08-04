<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        [
            'name' => 'ipad',
            'price' => '300.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'tech',
            'popularity' => '6'
        ],
        [
            'name' => 'monitor',
            'price' => '155.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'tech',
            'popularity' => '3'
        ],
        [
            'name' => 'Nintendo Switch',
            'price' => '250.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'tech',
            'popularity' => '15'
        ],
        [
            'name' => 'pool',
            'price' => '20.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'outdoors',
            'popularity' => '8'
        ],
        [
            'name' => 'tiki torch',
            'price' => '8.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'outdoors',
            'popularity' => '6'
        ],
        [
            'name' => 'outdoor stool',
            'price' => '56.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
             dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Lorem ipsum dolor sit amet. Adipiscing enim eu turpis 
             egestas pretium aenean pharetra. Sagittis eu volutpat odio facilisis mauris sit amet massa vitae. Lectus magna fringilla 
             urna porttitor rhoncus dolor. Cursus sit amet dictum sit amet justo donec enim diam. Erat nam at lectus urna duis convallis. 
             Nullam vehicula ipsum a arcu cursus vitae congue mauris. Cursus in hac habitasse platea dictumst quisque. Eget velit aliquet 
             sagittis id consectetur. Orci a scelerisque purus semper eget duis at tellus at. Lectus quam id leo in vitae turpis massa.',
            'category' => 'outdoors',
            'popularity' => '5'
        ],
        ]);
    }
}
