<?php

namespace App\Http\Controllers;

use App\Models\WalletType;
use App\Http\Requests\StoreWalletTypeRequest;
use App\Http\Requests\UpdateWalletTypeRequest;

class WalletTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWalletTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWalletTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalletType  $walletType
     * @return \Illuminate\Http\Response
     */
    public function show(WalletType $walletType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalletType  $walletType
     * @return \Illuminate\Http\Response
     */
    public function edit(WalletType $walletType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWalletTypeRequest  $request
     * @param  \App\Models\WalletType  $walletType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWalletTypeRequest $request, WalletType $walletType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WalletType  $walletType
     * @return \Illuminate\Http\Response
     */
    public function destroy(WalletType $walletType)
    {
        //
    }
}
