<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'gender', 'telephone', 'next_of_kin', 'next_of_kin_telephone',  'blood_group',  'genotype', 'user_id',
    ];

    public function table()
    {
        return $this->table;
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function cases()
    {
        return $this->hasMany('App\Cases', 'patient_id');
    }
}
