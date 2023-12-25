<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'MaTBMT', 
        'TenGoiThau', 
        'GiaGoiThau', 
        'TenChuyenGia', 
        'Email', 
        'NgayHen',
        'ChiPhi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expert()
    {
        return $this->belongsTo(Expert::class, 'Email', 'email');
    }
}
