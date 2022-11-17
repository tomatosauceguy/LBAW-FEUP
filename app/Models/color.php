<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    #use HasFactory;

    protected $primaryKey = 'id_color';

    protected $table = 'color';

    public $timestamps = false;

    protected $fillable = 'color_name';

    protected $hidden = [
        'color_name',
    ];

    protected $casts = [
        'id_color' => 'integer',
        'color_name' => 'string',
    ];

    public function primaryOwner() {
        return $this->belongsTo('App\Models\shoeColorSize');
    }

    public function secondaryOwner() {
        return $this->belongsTo('App\Models\shoeColorSize');
    }
}
