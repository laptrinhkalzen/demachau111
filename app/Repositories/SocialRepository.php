<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;

class SocialRepository extends AbstractRepository {

    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Social';
    }

    public function validateCreate() {
        return $rules = [
            'name' => 'required',
            'image' => 'required',
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