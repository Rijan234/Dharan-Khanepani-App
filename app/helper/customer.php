<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Specify the table name (optional if naming convention is followed)
    protected $table = 'customers';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'customer_id';

    // Let Eloquent know that the primary key is not auto-incrementing in the usual way
    public $incrementing = true;

    // Specify the primary key type as 'int'
    protected $keyType = 'int';
}
