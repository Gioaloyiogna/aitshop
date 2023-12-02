<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicalOrder extends Model
{
    use HasFactory;
    protected $table='physical_orders';
    protected $fillable=["basketTag","Amount", "Status","Deleted"];
}