<?php
/**
 * Created by PhpStorm.
 * User: Hien
 * Date: 11/09/2019
 * Time: 9:41 AM
 */

namespace App\Repositories;


use Repositories\Support\AbstractRepository;

class SlideRepository extends AbstractRepository
{
    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\Slide';
    }
    public function validateCreate() {
        return $rules = [
            'title' => 'required',
            'image' => 'required',
        ];
    }
    public function validateUpdate($id) {
        return $rules = [
            'title' => 'required',
        ];
    }

    public function getSlide1() {
        return $this->model->where('status', 1)->where('position', 1)->orderBy('ordering', 'asc')->get();
    }

    public function getSlide2() {
        return $this->model->where('status', 1)->where('position', 2)->orderBy('ordering', 'asc')->get();
    }

    public function getBannerMid() {
        return $this->model->where('status', 1)->where('position', 3)->orderBy('ordering', 'asc')->take(1)->get();
    }

    public function getBannerLeft() {
        return $this->model->where('status', 1)->where('position', 4)->orderBy('ordering', 'asc')->take(1)->get();
    }

    public function getBannerRight() {
        return $this->model->where('status', 1)->where('position', 5)->orderBy('ordering', 'asc')->take(1)->get();
    }

    public function getBannerEnd() {
        return $this->model->where('status', 1)->where('position', 6)->orderBy('ordering', 'asc')->take(1)->get();
    }

}