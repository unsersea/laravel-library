<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Table name
     */
    protected $table = "categories";

    /**
     * Primary key with auto increment
     */
    protected $primaryKey = "id";
    public $incrementing = true; // true: 1, false: 0

    protected $fillable = [
        "category",
        "create_at",
        "update_at"
    ];
}
