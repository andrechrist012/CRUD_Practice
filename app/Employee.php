<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employee_name', 'employee_address', 'employee_position', 'company_id'];

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
