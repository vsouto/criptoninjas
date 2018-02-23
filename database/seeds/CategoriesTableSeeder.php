<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::firstOrNew([
            'slug' => 'noticias',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Notícias',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'videos',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Vídeos',
            ])->save();
        }

        $category = Category::firstOrNew([
            'slug' => 'analises',
        ]);
        if (!$category->exists) {
            $category->fill([
                'name' => 'Análises',
            ])->save();
        }

    }
}
