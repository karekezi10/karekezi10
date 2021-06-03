<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloodstore extends Model
{
    use HasFactory;
    protected $table = 'bloodstores';
    public $timestamps = true;
    protected $fillable = [
        'name1',
        'blood_group1',
            'volume1',     
    ];
    
}
