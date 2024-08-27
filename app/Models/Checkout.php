<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'card_name', 
        'card_number', 
        'expiry_month', 
        'expiry_year', 
        'cvv', 
        'payment_method', 
        'terms_accept',
        'doctor_id',
        'patient_id',
        'amount'
        // Add other attributes here as needed
    ];
}
