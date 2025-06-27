<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Admission;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
     public function registerForm(){
        return view('user.auth.register');
    }

    public function register(Request $request)
    {
        // $validated = $request->validate([
        //     'name'     => 'required|string|max:255',
        //     'fatherName'     => 'required|string|max:255',
        //     'email'    => 'required|email|unique:student,email',
        //     'password' => 'required|min:6',
        //     'dob'      => 'required|date',
        //     'phone'    => 'required|string|max:15',
        //     'class'    => 'required|string|max:20',
        //     'section'  => 'required|string|max:20',
        // ]);

        $student = new Students();
        $student->name       = $request->name;
        $student->fatherName = $request->fatherName;
        $student->email      = $request->email;
        $student->password   = Hash::make($request->password);
        $student->dob        = $request->dob;
        $student->phone      = $request->phone;
        $student->class      = $request->class;
        $student->section    = $request->section;
        $student->save();

        session([
            'student_name'  => $student->name,
            'student_email' => $student->email,
        ]);

        return redirect()->route('loginForm')->with('success', 'Registration successful!');
    }

    public function profile()
    {
        return view('student.profile', [
            'studentName' => session('student_name')
        ]);
    }

    public function applyForm()
    {
        return view('user.pages.apply');
    }

    public function apply(Request $request)
{
    // Step 1: Validate input
    // $validated = $request->validate([
    //     'student_name'            => 'required|string|max:255',
    //     'dob'                     => 'required|date',
    //     'gender'                  => 'required|string|max:10',
    //     'father_name'             => 'required|string|max:255',
    //     'mother_name'             => 'required|string|max:255',
    //     'parent_occupation'       => 'nullable|string|max:255',
    //     'phone'                   => 'required|string|max:20',
    //     'email'                   => 'required|email|max:255|unique:admissions,email',
    //     'address'                 => 'required|string|max:500',
    //     'class'                   => 'required|string|max:10',
    //     'section'                 => 'nullable|string|max:10',
    //     'previous_school'         => 'nullable|string|max:255',
    //     'aadhar'                  => 'nullable|string|max:20',
    //     'nationality'             => 'nullable|string|max:50',
    //     'blood_group'             => 'nullable|string|max:5',
    //     'emergency_contact_name'  => 'nullable|string|max:255',
    //     'emergency_contact_phone' => 'nullable|string|max:20',
    // ]);

    // Step 2: Store data
    $admission = new Admission();
    $admission->student_name            = $request->student_name;
    $admission->dob                     = $request->dob;
    $admission->gender                  = $request->gender;
    $admission->father_name             = $request->father_name;
    $admission->mother_name             = $request->mother_name;
    $admission->parent_occupation       = $request->parent_occupation;
    $admission->phone                   = $request->phone;
    $admission->email                   = $request->email;
    $admission->address                 = $request->address;
    $admission->class                   = $request->class;
    $admission->section                 = $request->section;
    $admission->previous_school         = $request->previous_school;
    $admission->aadhar                  = $request->aadhar;
    $admission->nationality             = $request->nationality;
    $admission->blood_group             = $request->blood_group;
    $admission->emergency_contact_name  = $request->emergency_contact_name;
    $admission->emergency_contact_phone = $request->emergency_contact_phone;
    $admission->save();

    session(['student_name' => $request->student_name]);
    return redirect()->route('thanks_page')->with('success', 'Admission form submitted successfully!');
}

public function thank_you()
{
    return view('user.pages.thanks');
}

public function admission_details()
{
    $student = Admission::latest()->first();
    return view('pdf.admission_pdf', compact('student'));
}


}
