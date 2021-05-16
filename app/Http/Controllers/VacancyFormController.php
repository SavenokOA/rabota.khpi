<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyFormRequest;
use App\Models\Vacancies;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\False_;
use function Composer\Autoload\includeFile;

class VacancyFormController extends Controller
{
    public function add_vacancy(VacancyFormRequest $request){
        $defaul_path="/defaultimage.png";
      $vacancy = new Vacancies;
      $vacancy->NameVacancy = $request->input('NameVacancy');
      $vacancy->NameCompany = $request->input('NameCompany');
      $vacancy->ScopeCompany = $request->input('ScopeCompany');
      $vacancy->ActivityCompany = $request->input('ActivityCompany');
      $vacancy->WebsiteCompany = $request->input('WebsiteCompany');
      $vacancy->NumberCompany = $request->input('NumberCompany');
      $vacancy->EmailCompany = $request->input('EmailCompany');
     // $vacancy->LogoCompany = $request->input('LogoCompany');
      $vacancy->VacancyDescription = $request->input('VacancyDescription');
      $vacancy->Approved = False;
      $vacancy->save();
      if (session('locale')=='ua'){
          return redirect()->route('welcome')->with('success', 'Вакансія успішно збережена та чекає перевірки модератора. Через деякий час, ви зможете побачити її серед інших вакансій на нашому сайті' );
      }
      else{
          return redirect()->route('welcome')->with('success', 'The vacancy has been successfully saved and is awaiting a moderator check. Soon, you will be able to see her among other vacancies on our website' );
      }
    }
}
