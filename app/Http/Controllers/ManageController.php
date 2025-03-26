<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Categories;

class ManageController extends Controller
{
    ////manage for employees
    public function index_emp(){
        return view('manage.homeEmp');
    }

    public function view_products($id = FALSE){
        $edit = Products::find($id);
        $products = Products::all();
        $categories = Categories::all();
        return view('manage.products', ['products' => $products, 'categories' => $categories, 'edit' => $edit]);
    }
    public function view_orders(){
        return view('manage.orders');
    }
    public function view_pqrs(){
        return view('manage.pqrs');
    }


    //manage for administrator
    public function index_admin(){
        return view('manage.homeAdmin');
    }

    public function view_employees(){ #return view of employees
        $employees = User::where('rol', 'employee')->get();
        return view('manage.employees', ['employees' => $employees]);
    }

    public function view_reports(){ #return view of reports
        return view('manage.reports');
    }
}
