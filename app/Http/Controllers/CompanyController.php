<?php

namespace App\Http\Controllers;

use App\Company;
use App\District;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $items = Company::all();

        return view('pages.company.index', [
            'items' => $items
        ]);
    }

    public function create(){
        $items = District::all();
        return view('pages.company.create',[
            'items' => $items
        ]);
    }

    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        
        Company::create($data);
        return redirect()->route('company.index');
    }
}
