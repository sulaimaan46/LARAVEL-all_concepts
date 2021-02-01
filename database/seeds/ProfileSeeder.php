<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Author::class, 30)->create()->each(function ($u) {
            $u->getprofile()->save(factory(App\Models\Profile::class)->make());
        });
    }
}
