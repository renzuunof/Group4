<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'group4';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'contact_info',
        'marital_status',
    ];
}
