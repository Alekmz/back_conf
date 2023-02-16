<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\District;
use App\Models\User;

class Club extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'district_id'];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    public function members() {
        return $this->hasMany(User::class, 'club_id', 'id');

    }
}
