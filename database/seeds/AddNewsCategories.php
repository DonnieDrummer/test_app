<?php

use Illuminate\Database\Seeder;

class AddNewsCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'General', 'Food', 'Sport', 'Games'
        ];

        foreach ($categories as $category) {
            \App\Entities\NewsCategory::firstOrCreate([
                'name' => $category
            ]);
        }
    }
}
