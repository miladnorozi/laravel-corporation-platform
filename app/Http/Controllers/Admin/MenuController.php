<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menu',compact('menu'));
    }
}