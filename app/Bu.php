<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $fillable = ['bu_name', 'bu_price', 'bu_square', 'bu_small_dis', 'bu_meta', 'bu_longtitude', 'bu_latitude', 'bu_rent', 'bu_type', 'bu_status', 'bu_large_dis', 'user_id', 'rooms', 'bu_place', 'image', 'month', 'year'];
}
