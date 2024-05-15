<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Animev extends Model
{
    use HasFactory, Sortable;

    protected $table = 'animev';
    protected $primaryKey = 'id';
    protected $fillable = [
            
            
        'hashname',
        'document',
        'a_id',
            
        ];
}
