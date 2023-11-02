<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    public $primary='package_id';
    protected $table="packages";
    protected $fillable=[
        'package_code','package_name','permalink','package_desc','feature_img','location_id','comunity_id'
    ];
    public function comunity(){
        return $this->belongsTo(comunity::class,'comunity_id','comunity_id');
    }
}
