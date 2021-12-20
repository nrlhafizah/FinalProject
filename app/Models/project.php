<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table="project";

    protected $primaryKey = 'project_id';

    protected $fillable = [
        'project_category', 'project_name', 'project_leader', 'member', 'start_date', 
         'end_date', 'duration', 'cost', 'client', 'stage', 'progress'
    ];
};
