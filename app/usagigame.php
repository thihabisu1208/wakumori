<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usagigame extends Model
{
    //
    protected $usagigame = 'usagigame';

    public $timestamps = false;

    public function getData()
        {
        $data = DB::usagigame($this->usagigame)->get();

        return $data;
        }
}
