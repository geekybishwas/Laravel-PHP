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

    // It enables mass assignment
    protected $fillable=[
        'name',
        'email',
        'address',
        'dob',
        'city',
        'password',
        'status'
    ];

    protected $rules=
        [
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'dob' => 'required|date_format:Y-m-d', // Assuming the date format in your form is YYYY-MM-DD
            'city' => 'required|string',
            'password' => 'required|string|min:8', // Assuming a minimum length for the password
            'status' => 'required|numeric', // Assuming 'status' is a numeric field
        ];
    
} 
