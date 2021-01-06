<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class CompanyInforRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\CompanyInfor';
    }

    public function validateCreate() {
        return $rules = [
            'name' => 'required',
            'link' => 'required'
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
           'name' => 'required',
            'link' => 'required'
        ];
    }

    
}
