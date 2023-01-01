<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $table = 'general_setting';
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
