<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_batch extends Model
{
    use HasFactory;

    protected $table = 'job_batches';
    protected $guarded = [];
}
