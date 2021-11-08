<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Exports\EmployeeExport;
use Excel;
class EmployeeController extends Controller
{
    public function addEmployee(){
		$employee = [
						['name'=>'Abc','email'=>'abc@gmail.com','phone'=>'9999999999','salary'=>10000,'department'=>'Marketing'],
						['name'=>'Xyz','email'=>'xyz@gmail.com','phone'=>'888888888','salary'=>15000,'department'=>'Accounting'],
						['name'=>'Pqr','email'=>'pqr@gmail.com','phone'=>'777777777','salary'=>25000,'department'=>'Sales']
					];
		Employee::insert($employee);
		return "Record Inserted";
    }
    public function getEmployee(){
    	$records = Employee::all();
    	return $records;
    }
    public function exportIntoExcel(){
    	return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }
    public function ImportIntoCsv(){
    	return Excel::download(new EmployeeExport,'employeelist.csv');
    }
}
