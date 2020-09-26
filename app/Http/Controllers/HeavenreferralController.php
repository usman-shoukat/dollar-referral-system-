<?php
namespace App\Http\Controllers;

use App\Models\UserReferral;
use App\Models\Skyreferral;
use App\Models\Heavenreferral;
use App\Models\Buypackage;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HeavenreferralController extends Controller
{
     public $buypackage;
      public $user;
      public $userreferral;
      public $skyreferral;
      public $heavenreferral;

     public function __construct()
    {
        
        $this->buypackage = new Buypackage();
        $this->user = new User();
        $this->userreferral = new UserReferral();
        $this->skyreferral = new Skyreferral();
        $this->heavenreferral = new Heavenreferral();
       
    }
      public function index($ref)
    {
         
        $re = $ref;
        return view('heavenreferral')->with('re',$re);
    }

    public function store(Request $request , $ref)
    {
         $urlid = $ref;

    $checkref = Package::where(['user_id' => $urlid ])->first();
    $checkocean = $checkref->ocean;
    if ($checkocean == 0) {

    $addapp = User::where('id',$urlid)->first();
    $checkpreis_admin = $addapp->is_admin;

        if ($checkpreis_admin == 0) {
        $addapp = User::where('id',$urlid)->update(['is_admin' => 1]);
        }
        if ($checkpreis_admin == 1) {
        $addapp = User::where('id',$urlid)->update(['is_admin' => 2]);
        }
          return redirect()->route('oceanreferral',['ref'=> $urlid])->with(['delete' => true, 'message' => 'Your Referral Link is not match with our records']);
        
    }
        $userref = User::where(['id' => $urlid ])->first();


        if ($userref) {
     $userData = [
         
             'name' => $request['name'],
              'email' => $request['email'],
               'password' =>  Hash::make($request['password']),
           

                 ];
     $createdUser = $this->user->create($userData);

     if ($userref) {
         $this->userreferral->create(['user_id' => $createdUser->id, 'referred_by_id' => $urlid, 'pack_name' => 'heaven', 'ref_o' => 1, 'ref_s' => 1, 'ref_h' => 1, 'ref' => 1]);
     }
     return redirect()->route('login');
        }
     else{
      return redirect()->route('makereferral',['ref'=> $urlid])->with(['error' => true, 'message' => 'Your Referral Link is not match with our records']);
    }
    }

}
