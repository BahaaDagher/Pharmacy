<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = ['created_at' , 'updated_at' , 'deleted_at'] ;
    use HasFactory;

    public function drugs(){
        return $this->belongsToMany(drug::class , "drug_category" , "category_id" , "drug_id" ) ; 
    }
}
