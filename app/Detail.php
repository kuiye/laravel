<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model {

	//
   /* public function firstlogin()
    {
        //return $this->hasMany('App\User', 'id', 'user_id');
    }*/
    protected $fillable = ['type', 'cname', 'website', 'ctype', 'caddress','image','cnumber','ctel','user_id'];
}
