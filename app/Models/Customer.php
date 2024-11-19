<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_id'; // Specify the primary key column.
    public $incrementing = true; // Auto-increment is enabled.

    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'phone_number',
        'meter_id',
        'ward_no',
        'tole',
        'customer_photo',
        'api_token',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'tole', 'tole'); // Match 'tole' in both tables.
    }

    /**
     * Get all of the bills for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
}
