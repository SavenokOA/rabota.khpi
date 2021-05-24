<?php

namespace App\Http\Controllers;
use App\Models\Vacancies;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public  function changeLocale($locale){



       session(['locale' =>$locale]);
       App::setLocale($locale);


       return view('welcome',['vacancy'=>Vacancies::all()]);

   }

   public function ReturnLocale (){
       session(['locale' =>'en']);
       App::setLocale('en');
       return view('welcome',['vacancy'=>Vacancies::all()]);
   }

   public function allVacancy(){

      return view('welcome', ['vacancy'=>Vacancies::all()]);
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
