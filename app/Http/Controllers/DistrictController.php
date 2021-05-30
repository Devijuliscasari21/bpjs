<?php

namespace App\Http\Controllers;

use App\District;
use App\Http\Requests\DistrictRequest;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $items = District::all();

        return view('pages.district.index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('pages.district.create');
    }

    public function store(DistrictRequest $request)
    {
        $data = $request->all();

        District::create($data);
        return redirect()->route('district.index');
    }
}
