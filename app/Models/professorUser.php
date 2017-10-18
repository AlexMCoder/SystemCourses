<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class professorUser
 * @package App\Models
 * @version May 30, 2017, 7:18 pm UTC
 */
class professorUser extends Model
{
    use SoftDeletes;

    public $table = 'professor_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name',
        'password',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'password' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:60',
        'email' => 'required|email'
    ];

    
}
