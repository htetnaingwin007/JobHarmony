<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class JobLocation extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'job_locations';
    protected $fillable = [
        'location'
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'location_id', 'id');
    }
}
