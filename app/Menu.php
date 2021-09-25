<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  public $timestamps = false;

  protected $table = '_header';

  protected $fillable = array('id','Dyanamic');

  public function parent()
  {
    return $this->belongsTo('App\Menu', 'id');
  }

  public function children()
  {
    return $this->hasMany('App\Menu', 'cid');
  }
}
