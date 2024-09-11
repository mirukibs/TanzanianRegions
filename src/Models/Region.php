<?php

namespace TanzanianRegions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    
    protected $fillable = ['name'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
