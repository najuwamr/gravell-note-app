<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'project_id',
        'parent_folder_id',
        'position',
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_folder_id');
    }

    public function children()
    {
        return $this->hasMany(Folder::class, 'parent_folder_id');
    }

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
}
