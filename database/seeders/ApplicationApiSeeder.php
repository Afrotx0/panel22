<?php

namespace Database\Seeders;

use App\Models\ApplicationApi;
use Illuminate\Database\Seeder;

class ApplicationApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationApi::create([
            'memo' => 'admin'
        ]);
    }
}
