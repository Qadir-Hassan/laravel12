<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function showForm()
    {
        return view('forms.formshow');
    }

    public function processForm(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'description' => 'nullable|string',
            'is_active' => 'sometimes|accepted',
            'gender' => 'required|in:male,female',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'age' => 'required|integer|min:18',
            'birthdate' => 'required|date',
            'country' => 'required|in:US,CA,UK,AU',
          
        ];

        // Custom error messages (optional)
        $messages = [
            'is_active.accepted' => 'You must accept the terms.',
            'profile_picture.max' => 'The profile picture must not be greater than 2MB.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('forms.formshow')
                ->withErrors($validator)
                ->withInput();
        }

        // Store validated data in variables
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $description = $request->input('description');
        $isActive = $request->input('is_active');
        $gender = $request->input('gender');
        $profilePicture = $request->file('profile_picture');
        $age = $request->input('age');
        $birthdate = $request->input('birthdate');
        $country = $request->input('country');
        $hiddenField = $request->input('hidden_field');

        // File Uploading
        $profilePicturePath = null;
        if ($profilePicture) {
            $profilePicturePath = $profilePicture->store('profile_pictures', 'public');
        }

        // Pass data to view
        return view('forms.form-result', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'description' => $description,
            'isActive' => $isActive,
            'gender' => $gender,
            'profilePicturePath' => $profilePicturePath,
            'age' => $age,
            'birthdate' => $birthdate,
            'country' => $country,
            'hiddenField' => $hiddenField,
        ]);
    }
}