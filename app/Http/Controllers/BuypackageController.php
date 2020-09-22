<?php

namespace App\Http\Controllers;

use App\Models\Buypackage;
use Illuminate\Http\Request;
use App\Models\Package;


class BuypackageController extends Controller
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
        $this->userModel = new Buypackage();
        $this->package = new Package();
       
    }

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
        return view('active');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $userData = [
            'user_id' => auth()->user()->id,
             'PackageName' => $request['PackageName'],
              'Packageprice' => $request['Packageprice'],
               'platform' => $request['platform'],
                'Transactionid' => $request['Transactionid'],
                ];

        $createdUser = $this->userModel->create($userData);
        $userref = Package::where(['user_id' => auth()->user()->id])->first();

   if ($userref) {
   
  switch ($request['PackageName']) {
  case "ocean":
   $addapp = Package::where('user_id',auth()->user()->id)->update(['ocean' => 1]);
          return redirect()->route('active');
  case "sky":
   $addapp = Package::where('user_id',auth()->user()->id)->update(['sky' => 1]);
          return redirect()->route('active');
  case "heaven":
   $addapp = Package::where('user_id',auth()->user()->id)->update(['heaven' => 1]);
          return redirect()->route('active');
          return redirect()->route('active');

}

    }
    elseif (!$userref) {

       switch ($request['PackageName']) {
  case "ocean":
         $this->package->create(['user_id' => auth()->user()->id, 'ocean' => 1]);
          return redirect()->route('active');
  case "sky":
         $this->package->create(['user_id' => auth()->user()->id, 'sky' => 1]);
          return redirect()->route('active');
  case "heaven":
         $this->package->create(['user_id' => auth()->user()->id, 'heaven' => 1]);
          return redirect()->route('active');
          return redirect()->route('active');

}
    }

    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buypackage  $buypackage
     * @return \Illuminate\Http\Response
     */
    public function show(Buypackage $buypackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buypackage  $buypackage
     * @return \Illuminate\Http\Response
     */
    public function edit(Buypackage $buypackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buypackage  $buypackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buypackage $buypackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buypackage  $buypackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buypackage $buypackage)
    {
        //
    }
}
