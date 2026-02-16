<?php

namespace App\Models;

use App\Scopes\ScopePerson;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;



class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . '歳)';
    }

    //nameが$strと等しいデータを取得するスコープ
    public static function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    //ageが$n以上のデータを取得するスコープ
    public static function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    //ageが$n以下のデータを取得するスコープ
    public static function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ScopePerson);//これでscopePerson(age>=20)が適用される
    }
}
