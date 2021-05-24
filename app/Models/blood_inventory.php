<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_inventory extends Model
{
    use HasFactory;
    protected $table = 'blood_inventories';
    public $timestamps = true;
    protected $fillable = [
        'blood_group',
            'volume',
            'status',
            'donor_id',
            'request_id',
         
    ];
}
