<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Role;

class Employee extends Model
{
    use HasFactory;
    private $casualLeave = 15;
    private $annualLeave = 15;
    private $medicalLeave = 30;

    public function role(){
        return $this->BelongsTo('App\Models\Role');
    }


    public function getCasualLeave(){
        return $this->casualLeave;
    }

    public function getAnnualLeave(){
        return $this->annualLeave;
    }

    public function getMedicalLeave(){
        return $this->medicalLeave;
    }

    public function scopeFilter($query){
        if(request('search')){
            $query->where('name','like', '%'.request('search').'%');
        }
    }
}
