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
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return professorUser::class;
    }
}
