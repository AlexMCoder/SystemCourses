<?php

namespace App\Repositories;

use App\Models\professorUser;
use InfyOm\Generator\Common\BaseRepository;

class professorUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'email',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return professorUser::class;
    }
}
