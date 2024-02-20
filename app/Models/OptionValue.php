<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(OptionType::class, 'option_type_id');
    }

    public function getIdentifier()
    {
        // relationship type and links to OptionType
        $optionType = $this->type;

        // prefix based on option type
        $prefix = '';
        if ($optionType) {
            switch ($optionType->type) {
                case 'Color':
                    $prefix = 'C';
                    break;
                case 'Size':
                    $prefix = 'S';
                    break;
            }
        }

        return $prefix . $this->id;


    }
}
