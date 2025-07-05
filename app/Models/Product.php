<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Optionally specify the table if it's different from the pluralized model name
    protected $table = 'product';

    // Optionally specify the primary key if it's different from the default 'id'
    // protected $primaryKey = 'custom_id';

    // If your primary key is not an auto-incrementing integer, set this to false
    // public $incrementing = false;

    // Optionally define which fields can be mass-assigned
    protected $fillable = [
        'id',
        'name',
        'img',
        'updated_at',
        'long_description',
        'schematic_img_1000',
        'schematic_img_2000',
        'schematic_img_3000',
        'schematic_img_4000',
        'schematic_img_5000',
        'schematic_img_6000',
        'category',
        'status',
        'detail_product'
    ];
}
