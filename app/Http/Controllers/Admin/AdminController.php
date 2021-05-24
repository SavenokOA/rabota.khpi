<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $Vacancy_count=Vacancies::all()->count();
        $Post_count= Post::all()->count();
        return view('admin.home.index',[
            'post_count'=>$Post_count,
            'vacancy_count'=>$Post_count,
        ]);
    }
}
