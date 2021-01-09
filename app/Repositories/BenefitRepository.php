<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class BenefitRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Benefit';
    }

    public function validateCreate() {
        return $rules = [
            'name' => 'required',
            'content' => 'required'
            'order' => 'required',
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
            'name' => 'required',
            'content' => 'required',
            'order' => 'required',

        ];
    }

    
}
