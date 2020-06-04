<?php


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PostTableSeeder::class);
        $this->call(PageTableSeeder::class);

        Model::reguard();
    }
}
