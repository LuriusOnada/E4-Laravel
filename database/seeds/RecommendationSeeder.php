<?php

use Illuminate\Database\Seeder;
use App\Models\Recommendation;

class RecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recommendation::create([
        	'code' => 'A'
        	'libelle' => 'Pour adulte'
        ]);

        Recommendation::create([
        	'code' => 'T'
        	'libelle' => 'Pour tout le monde'
        ]);

        Recommendation::create([
        	'code' => 'E'
        	'libelle' => 'Pour enfant'
        ]);
    }
}
