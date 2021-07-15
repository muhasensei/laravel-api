<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    public function index()
    {
        $data = DB::table('currencies')->latest()->get();
        $data = $data->unique('name');
        return $data;
    }

    public function store(Request $request)
        {
            // return Currency::create($request->all());
        }

    public function show($id)
        {
            $currency = Currency::where('name', $id)->firstOrFail();
            return $currency;
        }

    public function update(Request $request, $id)
        {
            //
        }

    public function destroy(Request $request, $id)
        {
            //
        }
}
