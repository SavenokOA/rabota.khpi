<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'NameVacancy'=>'required|min:5|max:50|',
            'NameCompany'=>'required|min:3|max:20|nullable',
            'ScopeCompany'=>'max:500|string|nullable',
            'ActivityCompany'=>'max:50|',
            'WebsiteCompany'=>'nullable|string',
            'NumberCompany'=>'required|numeric|',
            'EmailCompany'=>'required|email:rfc,dns',
            'LogoCompany'=>'file|image|nullable|max:300',
            'VacancyDescription'=>'required|max:3000',
        ];
    }

    public function attributes(){
        if ($this->session('locale'=='ua')){
    return [
        'NameVacancy'=>'"назва вакансії"',
        'NameCompany'=>'"назва компанії"',
        'ScopeCompany'=>'"сфера діяльності"',
        'ActivityCompany'=>'"вид діяльності"',
        'WebsiteCompany'=>'"Website компанії"',
        'NumberCompany'=>'"номер компанії"',
        'EmailCompany'=>'"пошта компанії"',
        'Logo Company'=>'"лого компанії"',
        'VacancyDescription'=>'"опис вакансії"'
        ];
        }
        elseif($this->session('locale'=='en')){
            return [
                'NameVacancy'=>'"name of vacancy"',
                'NameCompany'=>'"name of company"',
                'ScopeCompany'=>'"scope of company"',
                'ActivityCompany'=>'"activity of company"',
                'WebsiteCompany'=>'"company Website"',
                'NumberCompany'=>'"company contact number"',
                'EmailCompany'=>'"company Email"',
                'Logo Company'=>'"logo of company"',
                'VacancyDescription'=>'"description of vacancy"'
            ];

        }

    }
}
