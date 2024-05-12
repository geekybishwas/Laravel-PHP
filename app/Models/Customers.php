<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='customers';
    protected $primaryKey='customer_id';

    // Accessor and mutators
    // Mutators allows us to modify an attribute value before saving it to database(it modify an attribute value before storing in db)
    public function setNameAttribute($value)
    {
        $this->attributes['name']=ucwords($value);
    }

    // // Accessor allows us to modify an attribute value when it is accessed(it modify an attribute value after accessing from the db) 
    public function getDobAttribute($value)
    {
        return date('d-M-Y',strtotime($value));
    } 
} 
