<?php

use Illuminate\Database\Seeder;
use App\Models\Meetings;
use App\Models\Races;
use App\Models\Competitors;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = factory(Meetings::class,50)
            ->create()
            ->each(function($c) {
                $c->races()->saveMany(factory(Races::class, 6)
                  ->create())
                  ->each(function($d) {
                      $d->competitors()->saveMany(factory(Competitors::class, 4)
                          ->create());
                  });
            });
    }
}
