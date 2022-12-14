<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\PendingRequest;

class StudentRequest extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
        'lrn',
        'email',
        'address',
        'birthday',
        'contact',
        'gender',
        'document',
        'tracking_number',
        'pin',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function processing(){
        return $this->belongsToMany(ProcessingRequests::class);
    }
}

