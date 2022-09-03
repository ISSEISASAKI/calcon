<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{

    protected $fillable = ['id', 'name', 'img_filename', 'admin_id', 'created_id', 'updated_id', 'deleted_id'];
    
}
