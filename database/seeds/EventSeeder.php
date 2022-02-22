<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            ['name' => Str::random(10), 'slug' => Str::random(10), 'startAt' => Carbon::parse('1-01-2022'), 'endAt' => Carbon::parse('25-01-2022'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => Str::random(10), 'slug' => Str::random(10), 'startAt' => Carbon::parse('1-02-2022'), 'endAt' => Carbon::parse('25-02-2022'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => Str::random(10), 'slug' => Str::random(10), 'startAt' => Carbon::parse('1-03-2022'), 'endAt' => Carbon::parse('25-03-2022'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => Str::random(10), 'slug' => Str::random(10), 'startAt' => Carbon::parse('1-04-2022'), 'endAt' => Carbon::parse('25-04-2022'), 'created_at' => now(), 'updated_at' => now()],
            ['name' => Str::random(10), 'slug' => Str::random(10), 'startAt' => Carbon::parse('1-05-2022'), 'endAt' => Carbon::parse('25-05-2022'), 'created_at' => now(), 'updated_at' => now()]
        ]);//
    }
}
