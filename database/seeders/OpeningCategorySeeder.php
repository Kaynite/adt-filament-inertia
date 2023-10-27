<?php

namespace Database\Seeders;

use App\Models\OpeningCategory;
use Illuminate\Database\Seeder;

class OpeningCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(['Career Openings', 'Internship Openings'])
            ->each(fn ($category) => OpeningCategory::create(['name' => $category]));
    }
}
