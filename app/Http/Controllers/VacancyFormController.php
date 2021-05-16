<?php

namespace App\Http\Controllers;

use App\Http\Requests\VacancyFormRequest;

use App\Http\Requests;
class VacancyFormController extends Controller
{
    public function add_vacancy(VacancyFormRequest $request){
      return "okay";
    }
}
