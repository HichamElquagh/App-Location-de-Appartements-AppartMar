<?php

namespace App\Http\Requests;

use App\Rules\ReservationRule;
use Illuminate\Foundation\Http\FormRequest;

class storeReservationRequest extends FormRequest
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
        return [
            'start_date'=>'required|date|after_or_equal:today',
            'end_date'=>'required',
        ];
    }

    }
