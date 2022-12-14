<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'day',
    'stamp',
    'body',
    'memo',
    'start_date',
    'end_date',
    'event_name',
];
    
    public function user()
{
    return $this->belongsTo(User::class);
}

}
