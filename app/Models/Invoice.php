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
    'notes','payment_date','created_by',
];
    protected $dates=['deleted_at'];
    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }
}
