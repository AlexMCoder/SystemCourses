<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Curso
 * @package App\Models
 * @version May 30, 2017, 7:28 pm UTC
 */
class Curso extends Model
{
    use SoftDeletes;

    public $table = 'cursos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'file',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'file' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'file' => 'required',
        'descricao' => 'required'
    ];

    
}
