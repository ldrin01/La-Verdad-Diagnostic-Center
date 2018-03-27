<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patients;
use App\Departments;
use App\DepartmentStaffs;
use App\Staffs;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function addPatient()
    {
        $patients = Patients::get();

        return view('add-new-patient', compact('patients'));
    }
    public function patientsToday()
    {
        return view('patients-today');
    }
    public function admissionsList()
    {
        return view('admissions-list');
    }
    public function patientsList()
    {   
        $patients = Patients::get();
        return view('patients-list', compact('patients'));
    }
    public function medicalstaffsList()
    {
        $medicalStaffs = Staffs::join('department_staffs', 'staffs.id', '=', 'department_staffs.staff_id')->join('departments', 'department_staffs.department_id', '=', 'departments.id')->get();

        // echo $medicalStaffs;

        return view('medical-staffs-list', compact('medicalStaffs'));
    }


    public function addNew(Request $request)
    {
        $firstName = $request->firstName;
        $middleName = $request->middleName;
        $lastName = $request->lastName;
        $address = $request->address;
        $age = $request->age;
        $birthdate = $request->birthdate;
        $gender = $request->gender;
        $contact = $request->contact;
        $status = $request->status;
        $religion = $request->religion;

        // echo $firstName.$middleName.$lastName.$address.$age.$birthdate.$gender.$contact.$status.$religion;

        $patient = new Patients;
        $patient->first_name = $firstName;
        $patient->middle_name = $middleName;
        $patient->last_name = $lastName;
        $patient->address = $address;
        $patient->age = $age;
        $patient->gender = $gender;
        $patient->birthdate = $birthdate;
        $patient->contact_number = $contact;
        $patient->religion = $religion;
        $patient->civil_status = $status;
        $patient->save();

        $id = Patients::where('first_name', $firstName)->where('middle_name', $middleName)->where('last_name', $lastName)->where('address', $address)->where('age', $age)->where('gender', $gender)->where('birthdate', $birthdate)->where('contact_number', $contact)->where('religion', $religion)->where('civil_status', $status)->value('id');

        echo $id;

        
    }
    public function clicked($id)
    {
        echo $id;
    }
}
