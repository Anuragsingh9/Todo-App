<?php

namespace Modules\SuperAdmin\Http\Controllers;

use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SuperAdminController extends Controller
{
    public function firstMethod(){
        dd('okk');
    }

    public function createAccount() {
        $fqdn = "firstty.". env('APP_HOST');
        $website = new Website;
        $website = app(WebsiteRepository::class)->create($website);

        $hostname = new Hostname();
        $hostname->fqdn = $fqdn;
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);
        return $hostname;
//        dd($website->hostnames); // Collection with $hostname
    }
}
