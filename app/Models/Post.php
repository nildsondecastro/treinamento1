<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'pst_id';

    protected $fillable = [
        'pst_texto',
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'pst_id', 'pst_id');
    }


}
