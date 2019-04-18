<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    /**
     * Override the redirect to ensure we get back to the form
     */
    protected $redirect;

    public function __construct()
    {
        parent::__construct();
        $this->redirect = route('home') . '#contact-link';
    }

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
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'message' => 'required'
        ];
    }

    /**
     * Override messages
     */
    public function messages()
    {
        return [
            'name.required'  => 'Please provide your name',
            'email.required' => 'Please provide your email',
            'email.email'    => 'Please provide a valid email',
            'phone.required' => 'Please provide a phone number',
            'message.required' => 'Please provide a message'
        ];
    }
}
