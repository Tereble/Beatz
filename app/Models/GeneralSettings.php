<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GeneralSettings extends Model
{
    use HasFactory;

    protected $table = 'generalsettings';

    protected $primaryKey = 'id';


    protected $fillable = ['app_name', 'logo', 'currency', 'icon'];
}
