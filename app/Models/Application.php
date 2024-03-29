<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      "name",
      "email",
      "message",
      "status",
      "comment",
    ];

    public const STATUS = [
        'Active' => 'На рассмотрении',
        'Resolved' => 'Рассмотренно',
    ];

}
