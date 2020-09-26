<?php

namespace App\Http\Controllers;

use App\Models\UserReferral;
use App\Models\Skyreferral;
use App\Models\Buypackage;
use App\Models\User;
use App\Models\Package;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public $buypackage;
      public $user;
      public $userreferral;
      public $skyreferral;

     public function __construct()
    {
        
        $this->buypackage = new Buypackage();
        $this->user = new User();
        $this->userreferral = new UserReferral();
        $this->skyreferral = new Skyreferral();
       
    }
    public function index($ref)
    {
        
        $re = $ref;
        return view('oceaneferral')->with('re',$re);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $ref)
    {
                 $urlid = $ref;

    

        $userref = User::where(['id' => $urlid ])->first();


        if ($userref) {
     $userData = [
         
             'name' => $request['name'],
              'email' => $request['email'],
               'password' =>  Hash::make($request['password']),
           

                 ];
     $createdUser = $this->user->create($userData);

     if ($userref) {

$this->userreferral->create(['user_id' => $createdUser->id, 'referred_by_id' => $urlid, 'pack_name' => 'ocean', 'ref_o' => 1, 'ref' => 1]);
         
     }
     return redirect()->route('login');
        }
     else{
      return redirect()->route('oceanreferral',['ref'=> $urlid])->with(['delete' => true, 'message' => 'Your Referral Link is not match with our records']);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserReferral  $userReferral
     * @return \Illuminate\Http\Response
     */
    public function skystore(Request $request , $ref)
    {
         $urlid = $ref;

        $userref = User::where(['id' => $urlid ])->first();


        if ($userref) {
     $userData = [
         
             'name' => $request['name'],
              'email' => $request['email'],
               'password' =>  Hash::make($request['password']),
           

                 ];
     $createdUser = $this->user->create($userData);

     if ($userref) {
         $this->userreferral->create(['user_id' => $createdUser->id, 'referred_by_id' => $urlid,  'pack_name' => 'sky', 'ref_o' => 1, 'ref_s' => 1, 'ref' => 1]);
     }
     return redirect()->route('login');
        }
     else{
      return redirect()->route('makereferral',['ref'=> $urlid])->with(['error' => true, 'message' => 'Your Referral Link is not match with our records']);
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserReferral  $userReferral
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReferral $userReferral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserReferral  $userReferral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReferral $userReferral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserReferral  $userReferral
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReferral $userReferral)
    {
        //
    }
}
