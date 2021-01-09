<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
	
    protected $table = 'benefit';
    protected $fillable = ['name','content','order'];
    protected $primaryKey ='id';
    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function updated_at() {
        return date("d/m/Y", strtotime($this->updated_at));
    }
    public function validateCreate() {
        return $rules = [
            'name' => 'required',
            'content' => 'required'
            'order' => 'required'
        ];
    }

    public function validateUpdate($id) {
        return $rules = [
           'name' => 'required',
            'content' => 'required'
            'order' => 'required'
        ];
    }
}
