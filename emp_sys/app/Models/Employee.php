<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use HasFactory, SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identification',
        'birth',
        'salary',
        'martial_status',
        'bonus',
        'order',
        'department_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'birth' => 'datetime',
        'salary' => 'integer',
        'bonus' => 'decimal:2',
        'order' => 'integer',
        'department_id' => 'integer',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function contactInfo()
    {
        return $this->hasOne(ContactInfo::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
