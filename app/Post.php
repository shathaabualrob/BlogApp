<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //public $primaryKey = 'item_id';
    //Timestamp
    public $timestamps = true;
    //public $timestamps = false;

}
