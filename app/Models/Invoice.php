<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['section_id','invoice_number','invoice_date','due_date','product',
    'amount_collection','amount_commission','discount','value_vat','rate_vat','total','value_status',
'notes','payment_date',
];
protected $dates=['deleted_at'];
}
