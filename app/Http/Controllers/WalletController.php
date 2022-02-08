<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreWalletRequest;
use App\Http\Requests\UpdateWalletRequest;
use Illuminate\Support\Facades\DB;


class WalletController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:api');
    }

    public function transfer(UpdateWalletRequest $request)
    {
        DB::beginTransaction();

        $request->validate([
            'from' =>'required|integer',
            'to' =>'required|integer',
            'amount' => 'required|integer'
        ]);

        $from = $request['from'];
        $to = $request['to'];
        $amount = $request['amount'];

        $user = Auth::user();
       
        //transfer money from one wallet to the otehr
        $fromWallet = Wallet::where(['wallet_type_id' => $from,
        'user_id' => $user->id])->first();
        $fromBalance = $fromWallet->balance;

        $toWallet = Wallet::where(['wallet_type_id' => $to,
        'user_id' => $user->id])->first();
        $toBalance = $toWallet->balance;

        if($amount > $fromBalance)
        {
            return response()->json(["message" => "Insufficient funds"], 403);
        }

        $newFromBalance = $fromBalance - $amount;
        $newToBalance = $toBalance + $amount;

        
        $fromWallet->balance= $newFromBalance;
        $fromWallet->save();

        $toWallet->balance = $newToBalance;
        $toWallet->save();
        DB::commit();

        return response()->json(["message" => "Money Transferred"], 403);
        
    }
  
}
