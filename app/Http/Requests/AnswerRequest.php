<?php

namespace App\Http\Requests;

use App\Models\Answer;
use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'user_id' => 'required|exists:App\Models\User,id',
            'answer_id' => 'required|exists:App\Models\Answer,id',
        ];
        $answer = Answer::query()->find($this->attributes->get('answer_id'));
        if (!empty($answer) and $answer->type == 2) {
            $rules['text'] = 'required';
        }
        return $rules;
    }
}
