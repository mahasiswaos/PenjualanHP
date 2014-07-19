<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
class Profile extends Eloquent {
    protected $table = 'profile';
    
    public $timestamps = true;


    public function users(){
        return $this->belongsTo("App\\Models\Users");
    }
    
}
