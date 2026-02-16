<?php

namespace App\Models;

use App\Scopes\ScopePerson;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;



class Person extends Model
{
    protected $guarded = array('id');//idなどのDBで勝手に降られる値を用意しなくてもエラーにならないようになる

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
}
