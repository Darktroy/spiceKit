<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bgImages extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bg_images';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'bgImages_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'bgImages'
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
