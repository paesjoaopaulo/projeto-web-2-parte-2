<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Album::class, 30)
            ->create()
            ->each(function ($album) {
                $album->comments()->save(factory(App\Comment::class)->make());
                $album->photos()->save(factory(App\Photo::class)->make());
            });
    }
}
