<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Route;

class SitemapController extends Controller {
    public function index() {
        $routeCollection = app('router')->getRoutes();
        $urls = [];
        foreach ($routeCollection as $value) {
            $uri = $value->uri();
    	    if (strpos($uri, 'sitemap') !== false || strpos($uri, '404') !== false) {
    	    	continue;
    	    }
            if(($value->action['prefix']!='_ignition' && strpos($uri, 'api')===false && strpos($uri, 'external-cmd')===false && strpos($uri, 'download/{file}')===false && strpos($uri, 'get-results')===false && strpos($uri, 'logout')===false && $uri != '/') && $value->methods[0]=='GET') {
                $urls[] = $uri;
            }
        }
        return response()->view('sitemap.index', [
            'urls' => $urls,
        ])->header('Content-Type', 'text/xml');
    }
}
