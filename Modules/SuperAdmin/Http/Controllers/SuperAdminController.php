<?php

namespace Modules\SuperAdmin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuperAdminController extends Controller
{
    public function firstMethod(){
        dd('okk');
    }
}
