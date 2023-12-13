<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    
    protected $table ='images';

    protected $fillable =[
        'company_id', 'secondary_images'  ,
       ];
   
         //Relation 
         
         //one To many (company,images)
   
          public function company(){
   
           return $this->beLongsTo(company::class);
   
          }
}
