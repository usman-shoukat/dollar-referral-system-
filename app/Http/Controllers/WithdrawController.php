<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;
use App\Models\User;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
         public $userModel;

     public function __construct()
    {
         $this->middleware('auth');
        $this->userModel = new Withdraw();
       
    }
    public function withdrawsuccess()
    {


        return view('withdrawsuccess');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function applywithdraw(Request $request)
    {
        
         $userData = [
            
                'user_id' => auth()->user()->id,
                'perfectmoneyuserid' => $request['perfectmoneyuserid'],
                'amount' => $request['amount'],
                'bitcoinaddress' => $request['bitcoinaddress'],
                'advcash' => $request['advcash'],
                'cashemail' => $request['cashemail'],
                'JazzCashName' => $request['JazzCashName'],
                'JazzCashphone' => $request['JazzCashphone'],
                'paisaName' => $request['paisaName'],
                'easypaisaphone' => $request['easypaisaphone'],
                'skrillmail' => $request['skrillmail'],
                'payeeremail' => $request['payeeremail'],
                'platform' => $request['platform'],
    
                ];

        $createdUser = $this->userModel->create($userData);
      
                return redirect()->route('withdrawsuccess');

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function withdrawtransaction()
    {
        
        return view('withdrawtransaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdraw $withdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdraw $withdraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdraw $withdraw)
    {
        //
    }
}
