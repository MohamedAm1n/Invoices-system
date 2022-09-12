<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Attachment extends Model
{
    use HasFactory;
    protected $fillable = ['file_name','invoice_id'];
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
