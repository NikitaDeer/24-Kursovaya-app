<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'type',
      'manufacturer',
      'description',

      'image_path', //путь к фото
      'zip_path', //путь к zip-архиву

      'is_published',//публикация
    ];

    protected $casts = [
      'is_published' => 'boolean',
    ];
}
