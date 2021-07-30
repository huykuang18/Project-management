<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $table = 'issues';
    protected $fillable = [
        'issue_name',
        'user_id',
        'item_id',
        'deadline',
        'priority'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function creater()
    {
        return $this->belongsTo(User::class);
    }
}
