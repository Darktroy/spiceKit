<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu_type extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_types';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'menuTypeId';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'menuTypeId',
                  'name'
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
    protected $casts = [];
    



}
