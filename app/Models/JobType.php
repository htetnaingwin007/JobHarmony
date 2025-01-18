<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'job_types';
    protected $fillable = [
        'type', 
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'type_id', 'id');
    }
}
