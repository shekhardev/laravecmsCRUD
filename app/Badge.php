<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
  use SoftDeletes;

  protected $dates = ['is_deleted'];

}
