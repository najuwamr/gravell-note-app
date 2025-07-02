<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'title',
        'folder_id',
        'project_id',
        'google_drive_file_id',
        'last_synced_at',
        'position',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

}
