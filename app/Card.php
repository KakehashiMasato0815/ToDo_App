<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
          'title',
          'listing_id',
          'memo',
          'updated_at',
          'created_at'
    ];
}
