<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['section_id','invoice_number','invoice_date',
    'due_date','product_id','amount_collection','amount_commission',
    'discount','value_vat','rate_vat','total','status_id',
    'notes','payment_date','created_by'
];
protected $dates=['deleted_at'];
	/**
	 * @return mixed
	 */

}
