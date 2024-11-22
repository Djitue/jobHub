<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'jobs';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'employer_id',
        'job_title',
        'company_name',
        'location',
        'job_requirements',
        'salary_range',
        'job_type',
        'application_deadline',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'application_deadline' => 'datetime',
    ];

    /**
     * Define a relationship with the Employer model.
     * Assuming you have an Employer model tied to the user table or a separate table for employers.
     */
    // public function employer()
    // {
    //     return $this->belongsTo(User::class, 'employer_id');
    // }

    /**
     * Define a relationship with the Application model.
     * Assuming you have a separate table for job applications.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * A method to check if the job is expired.
     */
    public function isExpired()
    {
        return $this->application_deadline < now();
    }

    /**
     * Scope to filter jobs by job type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('job_type', $type);
    }

    /**
     * Scope to search for jobs by keywords in title or requirements.
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->where('job_title', 'like', "%$keyword%")
                     ->orWhere('job_requirements', 'like', "%$keyword%");
    }
}

