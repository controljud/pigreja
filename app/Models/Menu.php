<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $fillable = [
        'name',
        'description',
        'menu_id'
    ];

    protected $rules = [
        'name' => 'string|max:20|required',
        'description' => 'string|max:255|nullable',
        'menu_id' => 'integer|required|unique:menu,id'
    ];
}
