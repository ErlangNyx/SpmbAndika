<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Periode extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $table ="periode";

    protected $fillable = [
        'id',
        'aktif'
    ];

}