<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'homepages';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'homepageid';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'p1',
                  'p2',
                  'title'
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
