<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'author',
        'title',
        'post_content',
        'post_date',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
