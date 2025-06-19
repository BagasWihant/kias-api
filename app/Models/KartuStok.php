<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuStok extends Model
{
    protected $fillable = [
        'matl_no',
        'matl_nm',
        'wire_cd',
        'loc_cd',
        'matl_kind',
        'iss_unit',
        'iss_min_lot',
        'qty'
    ];
    
}
