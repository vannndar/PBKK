<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web design',
            'slug' => 'Web-design'
        ]);

        Category::create([
            'name' => 'Data Siencetist',
            'slug' => 'Data-Siencetist'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'Machine-Learning'
        ]);

        Category::create([
            'name' => 'Web Development',
            'slug' => 'Web-Development'
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'slug' => 'Mobile-Development'
        ]);
    }
}
