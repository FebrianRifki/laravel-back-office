<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey="id";
    protected $fillable=['employee_id','user_type','username','password'];
    public $timestamps = false;
    public $incrementing = false; 
    
    function getAll(){
        $result = User::where('user_type', 'normal')
        ->orderBy('employee_id', 'ASC')
        ->paginate(10);
        return $result;
    }
    function findById($id){
        $result = User::find($id);
        return $result;
    }
}
