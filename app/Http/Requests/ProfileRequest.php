<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            /*profile*/
            'mobile_no' => ['required','min:11'],
            'alternate_mobile_no' => ['required'],
            'cnic' => ['required'],
            'gender' => ['required'],
            'date_of_birth' => ['required'],
            'marital_status' => ['required'],
            'father_name' => ['required', 'string', 'max:255'],
            'spouse_name' => ['required','string', 'max:255'],
            'spouse_cnic' => ['required'],
            /*addresses*/
            'district_id' => ['required'],
            'current_address' => ['required'],
            'permanent_address' => ['required'],
            'postal_code' => ['required'],
            /* bank details*/
            'bank_name' => ['required'],
            'branch_code' => ['required'],
            'branch_address' => ['required'],
            'account_title' => ['required'],
            'account_number' => ['required'],
            'iban' => ['required'],
            /*emergency details*/
            'primary_contact' => ['required'],
            'alternate_contact' => ['required'],
            'relationship' => ['required'],
        ];
    }
}
