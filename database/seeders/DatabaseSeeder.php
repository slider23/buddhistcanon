<?php

namespace Database\Seeders;

use App\Models\SearchToken;
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
        $this->call(AdminSeeder::class);
        $this->call(PeopleSeeder::class);
        //$this->call(BookSeeder::class);
        $this->call(TermSeeder::class);
        $this->call(CrawlerSeeder::class);
        $this->call(SuttasSeeder::class);

        $token = new SearchToken();
        $token->token = 'bd8-us7-lt2';
        $token->description = 'Для dhamma.gift';
        $token->save();
    }
}
