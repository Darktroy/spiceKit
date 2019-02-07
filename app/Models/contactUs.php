<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contactUs extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contact_uses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'contactUsid';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'message',
                  'phone',
                  'name',
                  'email'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
               'contactUsid' => 'int'
           ];
    



}
