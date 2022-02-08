<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

   /* public $timestamps = false;
    protected $fillable = [
        'title',
        'body',
    ]; */

    protected $table ='posts';
    public $primarykey ='id';
    public $timestamps=false;

    public function user(){
    	return $this->belongsTo('App\Models\Post');
    }
}
