<?php

namespace App\Http\Requests;

use App\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class storeApplicant extends FormRequest
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
            //
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:applicants',
            'type' => [
                'required',
                Rule::in(['student', 'professional']),
            ],
            'phone' => 'required',
            'nationality' => [
                'required',
                Rule::in(General::getCountriesKey()),
            ],
            'university' => 'required_if:type,student',
            'school_level_and_last_diploma' => 'required_if:type,student',
            'reasonforjoin1' => [
                'required_if:type,student',
                Rule::in(["I have a project"]),
            ],
            'reasonforjoin2' => [
                'required_if:type,professional',
                Rule::in(["I propose a partnership", "I want to be member", "other"]),
            ],
            'company' => 'required_if:type,professional',
            'function' => 'required_if:type,professional',
            'otherreason' => 'required_if:reasonforjoin2,other',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        if (Session::get('locale') == 'fr') {
            return [
                'otherreason.required_if' => 'Vous devez spécifier une autre raison (personalisée) de nous joindre puisque la raison que vous avez choisit est "Autre Raison"',
                'reasonforjoin1.in' => 'La raison pour laquelle vous postuler en tant que étudiant n\'est pas valide (ne figure pas dans notre liste), veuillez en selectionner une de valide',
                'reasonforjoin2.in' => 'La raison pour laquelle vous voulez nous rejoindre ne tant que professionnel n\'est pas valide (ne figure pas dans notre liste), veuillez en selectionner une de valide',
            ];
        } else {
            return [
                'otherreason.required_if' => 'You must specify another reason (personalized) to join us since the reason you chose is "Other Reason"',
                'reasonforjoin1.in' => 'The reason you apply as a student is not valid (does not appear in our list), please select one from valid (our list)',
                'reasonforjoin2.in' => 'The reason you want to join us as a professional is not valid (does not appear in our list), please select one from valid(our list)',
            ];
        }

    }
}
