<?php

namespace App;

use Illuminate\Support\Facades\Http;
use Site;

class DeployWebtheory
{
    public static function createBooty(Site $site)
    {
        $response = Http::post(env('DEPLOYER_URL') . '/provision', [
            'application_name' => 'webtheory',
            'owner_email' => $site->user()->email,
        ]);

        $response = $response->json();
        $site->booty_id = $response->booty_id;
        $site->ip_address = $response->ip_address;
        $site->save();
        return true;
    }

    public static function deleteBooty(Site $site)
    {
        $response = Http::delete(env('DEPLOYER_URL') . '/booties/' . $site->booty_id);

        return true;
    }
    
    public static function addDomain(Site $site)
    {
        $response = Http::post(env('DEPLOYER_URL') . '/do/domains/', [
            'name' => $site->domain_name,
            'ip_address' => $site->ip_address,
        ]);

        $response = Http::post(env('DEPLOYER_URL') . '/do/domainrecords/' . $site->domain_name, [
            'type' => 'CNAME',
            'name' => 'www',
            'data' => $site->domain_name
        ]);

        $response = Http::post(env('DEPLOYER_URL') . '/adddomain/' . $site->booty_id, [
            'domain_name' => $site->domain_name
        ]);

        return true;
    }
}
