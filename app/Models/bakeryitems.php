<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class bakeryitems extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'menus';

}
