<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

}
