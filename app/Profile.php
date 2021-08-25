<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    // title,body,imgのカラムは、レコードの挿入を許可
    // 設定を変えたあとは一旦tinkerからexitする
    protected $fillable = ['profiletext', 'profileimage'];


    public function user()
  {
    return $this->hasOne('User::class');
  }
}
