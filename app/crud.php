<?php  
namespace App;  
use Illuminate\Database\Eloquent\Model;  
class Crud extends Model  
{  
    //  
protected $table='user';  
protected $fillable=['first_name','last_name','email','DOB','password','gender','qualifications','Course','Image'];  

}  