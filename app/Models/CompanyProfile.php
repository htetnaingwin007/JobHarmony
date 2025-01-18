<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyProfile extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'company_profiles';
    protected $fillable = [
        'name',
        'tagline',
        'description',
        'email',
        'phone',
        'website',
        'facebook',
        'twitter',
        'linkin',
        'logo',
    ];
}
