<?php

namespace App\Models;

use App\Scopes\ScopePerson;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;



class Person extends Model
{
    protected $guarded = array('id');//idなどのDBで勝手にふられる値を用意しなくてもエラーにならないようになる

    public $timestamps = false; //created_at、updated_atのカラムを自動で更新しないようにする

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function board()
    {
        return $this->hasMany('App\Models\Board');
    }
}
