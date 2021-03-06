<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';


    //primary key
    public $primaryKey = 'id';

    //TimeStamps
    protected $timeStamps = true;

    //Relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
