<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Event 1',
                'start_date' => '2023-10-20',
                'end_date' => '2023-10-22',
                // Add other columns and values as needed
            ],
            [
                'title' => 'Event 2',
                'start_date' => '2023-10-23',
                'end_date' => '2023-10-25',
                // Add other columns and values as needed
            ],
            // Add more data as necessary
      
        ];

        // Insert the data into the 'events' table
        DB::table('events')->insert($data);
    }
    
}
