<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'ward',
        'tole',
        'from',
        'to',
    ];

    public function schedule(){
        return $this->belongsToMany(Customer::class);
    }
}
