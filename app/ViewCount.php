<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewCount extends Model
{
    // Table name
    protected $table = 'ViewCount';

    // PrimaryKey
    public $primaryKey = 'id';

    public $timestamps = true;
}
