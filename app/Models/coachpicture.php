<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coachpicture extends Model
{
    use HasFactory;

    protected $fillable = ["coachName", "description", "file_path", "created_at", "updated_at"];
}
