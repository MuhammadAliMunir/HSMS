<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coustomers extends Model
{
    //
    protected $fillable = ['id', 'firstName', 'lastName','Email','Address','ZipCode','nicNumber','mobileNumber'];
}
