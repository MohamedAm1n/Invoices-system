<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Status extends Model
{
    use HasFactory;
    protected $fillable = ['status_value'];
    public function invoices()
        {
            return $this->hasMany(Invoice::class);
        }
}
