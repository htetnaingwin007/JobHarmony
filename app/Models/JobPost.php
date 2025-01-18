<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobPost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'job_posts';
    protected $fillable = [
        'image',
        'company_id',
        'email',
        'title',
        'location_id',
        'type_id',

        'description',
        'qualification',
        'responsibility',
        'experience',
        'salary',
        'benefits',
        'gender',
        'vacancy',
        'deadline',
        'status',
        
        
    ];
    public function location()
    {
        return $this->belongsTo(JobLocation::class);
    }
    public function type()
    {
        return $this->belongsTo(JobType::class);
    }
    
    public function company()
    {
        return $this->belongsTo(CompanyProfile::class);
    }
}

