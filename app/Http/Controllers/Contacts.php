<?php

namespace App\Http\Controllers;

use App\AmocrmIntegration;
use App\City;
use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contacts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function index(Request $request)
    {
        $contacts = DB::table('companies')
            ->where('status', '=', '0')
            ->orWhere('status', '=', '1')
            ->orWhere('status', '=', '2')
            ->orWhere('status', '=', '3')
            ->join('cities', 'companies.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'companies.*')
            ->orderBy('status')
            ->get();
        foreach ($contacts as $contact) {
            $contact->lists = explode(",", $contact->description);
        }
        return view('pages.kontakty', ['contacts' => $contacts]);
    }

    public function getByCountry(Request $request){
        $itemId = $request->id ? (int)$request->id : 0;
        $cities = DB::table('cities')->where('country', '=', $itemId)->orderBy('name')->get();
        return response()->json($cities);
    }

    public function getByCity(Request $request){
        $city_id = $request->id;
        if (isset($city_id)) {
            $contacts = DB::table('companies')
                ->where('city_id', '=', $city_id)
                ->join('cities', 'companies.city_id', '=', 'cities.id')
                ->select('cities.id as cities_id', 'cities.name as cities_name', 'companies.*')
                ->orderBy('status')
                ->get();
        } else {
            $contacts = DB::table('companies')
                ->join('cities', 'companies.city_id', '=', 'cities.id')
                ->select('cities.id as cities_id', 'cities.name as cities_name', 'companies.*')
                ->orderBy('status')
                ->get();
        }

        return response()->json($contacts);
    }

    public function edit(Request $request) {
        $company = Companies::findOrFail($request->id);
        $integrations = DB::table('amocrm_integrations')->get();
        $cities = DB::table('cities')->get();

        return view('pages.admin.amo-crm.companies_edit', ['integrations' => $integrations, 'cities' => $cities, 'company' => $company]);
    }


    public function store(Request $request){
        $companies = Companies::find($request->id);
        if (empty($companies)) {
            $companies = new Companies();
        }
        $companies->city_id = $request->input('city_id');
        if ($companies->city_id == 'Bishkek') {
            $companies->country = 2;
        } else {
            $companies->country = 1;
        }
        $companies->name = $request->input('name');
        $companies->address = $request->input('address');
        $companies->phone = $request->input('phone');
        $companies->integration_id = $request->input('integration_id');
        $companies->status = $request->input('status');
        $companies->description = $request->input('description');
        $companies->save();
        return redirect()->route('kontakty');
    }

    public function create(){
        $cities = DB::table('cities')->get();
        $integrations = DB::table('amocrm_integrations')->get();
        return view('pages.admin.amo-crm.companies_index', ['cities' => $cities, 'integrations' => $integrations]);
    }

    public function table(){
        $companies= DB::table('companies')
            ->join('cities', 'companies.city_id', '=', 'cities.id')
            ->select('cities.id as cities_id', 'cities.name as cities_name', 'companies.*')
            ->orderBy('status')
            ->get();
        return view('pages.admin.amo-crm.companies-table', ['companies' => $companies]);
    }

    public function remove(Request $request) {
        Companies::findOrFail($request->id)->delete();
        return redirect()->route('kontakty');
    }
}
