<?php

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
           'client_id'=>1,
           'hotel_id'=>2,
           'title'=>'good place',
           'comment'=>'good place to have rest',
        ]);
    }
}
