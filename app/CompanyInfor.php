<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable
use Illuminate\Database\Eloquent\Model;

class CompanyInfor extends Model
{
	
    protected $table = 'company_infor';
    protected $fillable = ['name','link','order'];
    protected $primaryKey ='id';
    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function updated_at() {
        return date("d/m/Y", strtotime($this->updated_at));
    }
}
