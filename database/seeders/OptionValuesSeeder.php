<?php

namespace Database\Seeders;

use App\Models\OptionType;
use App\Models\OptionValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $optionColor = OptionType::where('id', 11)->first();
        $optionSize = OptionType::where('id', 12)->first();

        // Red option
        OptionValue::create([
            'id' => 111,
            'option_type_id' => $optionColor->id,
            'value' => 'Red',
            'additional_cost' => 9.99
        ]);

        // Black
        OptionValue::create([
            'id' => 112,
            'option_type_id' => $optionColor->id,
            'value' => 'Black',
            'additional_cost' => 29.99
        ]);

        // Medium
        OptionValue::create([
            'id' => 121,
            'option_type_id' => $optionSize->id,
            'value' => 'Medium',
            'additional_cost' => 100.00
        ]);

        // Large
        OptionValue::create([
            'id' => 122,
            'option_type_id' => $optionSize->id,
            'value' => 'Large',
            'additional_cost' => 200.00
        ]);
    }
}
