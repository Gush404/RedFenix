<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Orchid\Screen\AsSource;

class item extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = ['author', 'name'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}