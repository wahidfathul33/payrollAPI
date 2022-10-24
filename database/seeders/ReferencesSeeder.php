<?php

namespace Database\Seeders;

use App\Models\References;
use Illuminate\Database\Seeder;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        References::create([
            'code'=> 'overtime_method',
            'name' => 'Salary / 173',
            'expression' => '(salary / 173) * overtime_duration_total'
        ]);
        References::create([
            'code'=> 'overtime_method',
            'name' => 'Fixed',
            'expression' => '10000 * overtime_duration_total'
        ]);
    }
}
