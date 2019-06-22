<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = ['id','numbar', 'street', 'status','block'];
    //
//     public function savePlot($data)
// {
//         $this->number = auth()->user()->id;
//         $this->street = $data['number'];
//         $this->street = $data['street'];
//         $this->status = $data['status'];
//         $this->block = $data['block'];
//         $this->save();
//         return 1;
// }
}
