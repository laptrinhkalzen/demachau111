<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

    //
    protected $table = "menu";
    protected $fillable = [
        'title', 'link', 'ordering', 'status', 'parent_id','type','keyword'
    ];

    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }

    public function updated_at() {
        return date("d/m/Y", strtotime($this->updated_at));
    }

}
