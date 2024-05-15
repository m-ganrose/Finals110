<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Anime extends Model
{
    use HasFactory, Sortable;

        protected $table = 'anime';
        protected $primaryKey = 'id';
        protected $fillable = [
                
                
                'title',
                'episode',
                'document',
                
            ];

        // public $incrementing = true; // Set to true for auto-incrementing 'id'
        // protected $keyType = 'int'; // Set the key type to integer
        // public $sortable = ['id', 'title', 'description', 'date'];
}
