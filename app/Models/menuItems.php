<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menuItems extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu_items';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'menuItemsId';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                    'image',
                    'title',
                    'menutypeId',
                    'itemDescription',
                    'price'
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
    

    public function type() {
        return $this->belongsTo('App\Models\menu_type', 'menutypeId');
    }

}
