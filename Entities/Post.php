<?php

namespace Son\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Son\Blog\Database\factories\PostFactory::new();
    }


    protected function getAuthorAttribute() {
        return 'Guilherme Soldateli';
    }
}
