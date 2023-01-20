<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MultipleDistrict;
use App\Models\Club;
class District extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'multiple_district_id'];

    public function multipleDistrict()
    {
        return $this->belongsTo(MultipleDistrict::class, 'multiple_district_id', 'id');
    }

    public function clubs() {
        return $this->hasMany(Club::class, 'district_id', 'id');

    }
}
