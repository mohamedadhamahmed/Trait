<?php
namespace App\Traits;
use App\Models\User;

trait TestTrait{

public function getAllUser($model){
return $model::all();
}

}

