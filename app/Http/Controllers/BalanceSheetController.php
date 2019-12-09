<?php

namespace App\Http\Controllers;

use App\BalanceSheets;
use App\Companies;
use App\PlanAccount;
use Illuminate\Http\Request;

class BalanceSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = BalanceSheets::all();

        // dd($datas);

        return view("balanceSheet/BalanceSheetView", compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pa = new PlanAccount;

        // $data = $request->all();

        // dd($datas);

        $companies     = Companies::all();
        $plan_accounts = PlanAccount::all();

        return view("balanceSheet/CreateBalanceSheetView", compact("companies"), compact("plan_accounts"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bs = new BalanceSheets;

        $data = $request->all();

        dd($data);

        $bs->company = $data['company'];
        // $bs->type     = $data['type'];
        // $bs->subtype  = $data['subtype'];
        // $bs->value    = $data['value'];
        // $bs->discount = $data['discount'];

        foreach ($data as $key => $value) {
            $bs->type     = $data['type'][$key];
            $bs->subtype  = $data['subtype'][$key];
            $bs->value    = $data['value'][$key];
            $bs->discount = $data['discount'][$key];

            echo $bs->type . '<br>';
        }

        dd($bs);

        $company->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
