<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $guarded = [];

    public function invoiceItem()
    {
        return $this->hasMany(InvoiceItem::class);
    }

}
