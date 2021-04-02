<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'status',
        'price',
        'image',
        'description',
    ];

    //interactua con los eventos del modelo diciendo que el que registra sea el mismo que se logeo
    protected static function boot(){
        parent::boot();
        self::creating(function ($table){
            if(!app()->runningInConsole()){
                $table->user_id=auth()->id();
            }
        });
    }

    //relacion de un modelo products-usuario

    public function user(){
        return $this->belongsTo(User::class);
    }
}
