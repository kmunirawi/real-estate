<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

    //** Constants */
    public const SALE = 1;
    public const RENT = 2;

    //**Relations */
    public function city()
    {
      return $this->belongsTo(City::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function type()
    {
      return $this->belongsTo(Type::class);
    }

    public function order()
    {
      return $this->hasOne(Order::class);
    }
}
