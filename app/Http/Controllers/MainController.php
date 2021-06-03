<?php

namespace App\Http\Controllers;
use App\Models\Fair;
use App\Models\Post;
use App\Models\Vacancies;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public  function changeLocale($locale){
       session(['locale' =>$locale]);
       App::setLocale($locale);
       $posts= Post::orderBy('created_at','desc')->get();
       $vacancies= Vacancies::where('Approved','1')->orderBy('created_at','desc')->get();
       return view('welcome',[
           'vacancy'=>$vacancies,
           'post'=>$posts,
       ]);

   }

   public function ReturnLocale (){
       session(['locale' =>'en']);
       App::setLocale('en');
       $posts= Post::orderBy('created_at','desc')->get();
       $vacancies= Vacancies::where('Approved','1')->orderBy('created_at','desc')->get();
       return view('welcome',['vacancy'=>$vacancies,'post'=>$posts,]);


   }

   public function allVacancy(){
       $posts= Post::orderBy('created_at','desc')->get();
       $vacancies= Vacancies::where('Approved','1')->orderBy('created_at','desc')->get();
       return view('welcome',['vacancy'=>$vacancies, 'post'=>$posts,]);
   }

   public function viewVacancies(){
       $vacancies= Vacancies::where('Approved','1')->orderBy('created_at','desc')->get();
       return view('all-vacancies',['vacancies'=>$vacancies, ]);
   }
    public function viewThisVacancy($id){
        $vacancy= Vacancies::where('id',$id)->first();
        return view('this-vacancy',['vacancy'=>$vacancy, ]);

    }

    public function viewFairs(){
       $fairs=Fair::orderBy('created_at','desc')->get();
        return view('all-fairs',['fairs'=>$fairs, ]);
    }


   public function index()
    {


    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
