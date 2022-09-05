<?php
namespace App\Models;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_description','created_by','section_id'];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
