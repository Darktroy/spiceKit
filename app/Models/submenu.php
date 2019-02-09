<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'submenus';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'submenuid';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'menu_id',
                  'submenu_name'
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
    
    /**
     * Get the menu for this model.
     */
    public function menu()
    {
        return $this->belongsTo('App\Models\Menu','menu_id');
    }



}
