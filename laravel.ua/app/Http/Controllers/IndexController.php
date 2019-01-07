<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\People;
use App\Service;
use App\Page;
use App\Portfolio;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function execute (Request $request){
        $pages=Page::all();
        $portfolios = Portfolio::get(array('name','filter','images'));
        $services = Service::where('id','<',20)->get();
        $peoples = People::take(3)->get();
        $tags = DB::table('portfolios')->distinct()->lists('filter');

        $menu = array();


        $item=array('title'=>'Home','alias'=>'home');
        array_push($menu,$item);

        $item=array('title'=>'About Us','alias'=>'aboutUs');
        array_push($menu,$item);

        $item=array('title'=>'Services','alias'=>'service');
        array_push($menu,$item);

        $item=array('title'=>'Portfolio','alias'=>'Portfolio');
        array_push($menu,$item);

        $item=array('title'=>'Team','alias'=>'team');
        array_push($menu,$item);

        $item=array('title'=>'Contact','alias'=>'contact');
        array_push($menu,$item);

        return view('site.index', array(
            'menu'=>$menu,
            'pages'=>$pages,
            'services'=>$services,
            'portfolios' => $portfolios,
            'peoples' => $peoples,
            'tags' => $tags
        ));
    }
}
