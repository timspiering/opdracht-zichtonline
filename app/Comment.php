<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Omdat het niet met relations gebouwd is, post_id ook fillable maken.
    protected $fillable = ['name', 'body', 'post_id'];
}
