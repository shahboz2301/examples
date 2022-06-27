<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletingScope;

class Company extends Model
{
    use HasFactory, SoftDeletes;

protected $table = 'companies';
protected $primaryKey = '';
    public  $incrementing = false;

protected $fillable = ['name', 'address'];
protected $guarded = ['name'];

public function lists(){
   return $this->hasMany(DeskList::class);
}



/*

    //table - companies

    protected $table = 'my_companies';

    // custom primary keys

    protected $primaryKey = 'company_id';

    //incrementing

    public $incrementing = false;


*/


    // timestamps
    public $timestamps = false;

    // default values
    protected $attributes = [
       'aktive'=>true
    ];

}
