<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancies= Vacancies::where('Approved','0')->orderBy('created_at','desc')->get();
        return view('admin.vacancy.index',['vacancies'=>$vacancies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancies $vacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancies  $vacancies
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Vacancies $vacancy)
    {
        return view('admin.vacancy.edit', ['vacancy'=>$vacancy]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancies $vacancy)
    {
       $vacancy->NameVacancy = $request->input('NameVacancy');
       $vacancy->NameCompany = $request->input('NameCompany');
       $vacancy->ScopeCompany = $request->input('ScopeCompany');
       $vacancy->ActivityCompany = $request->input('ActivityCompany');
       $vacancy->WebsiteCompany = $request->input('WebsiteCompany');
       $vacancy->NumberCompany = $request->input('NumberCompany');
       $vacancy->EmailCompany = $request->input('EmailCompany');
       $vacancy->VacancyDescription = $request->input('VacancyDescription');
       $vacancy->Approved = True;
        if (is_string($request->input('LogoCompany'))){
           $vacancy->LogoCompany = $request->input('LogoCompany');
        } else{
        $imageName= time().'.'.$request->LogoCompany->extension();
        $request->LogoCompany->move(public_path('image/logo-companies'), $imageName);
        $imagePath='/image/logo-companies/'.$imageName;
       $vacancy->LogoCompany =$imagePath;}
       $vacancy->save();

        return back()->with([
                    'success'=> 'Вакансия опубликована']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancies  $vacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancies $vacancy)
    {
        $vacancy->delete();
        return redirect()->back()->withSuccess('Статья была успешно удалена!');
    }
}
