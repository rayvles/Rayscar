<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index(){
        return view('admin.admin');
    }

    public function tabledata(){
        return view('admin.tabledata');
    }

    public function formpost(){
        return view('admin.formpost');
    }

    public function tabledatapembeli(){
        return view('admin.tabledatapembeli');
    }

    public function formpembeli(){
        return view('admin.formpembeli');
    }

}

?>
