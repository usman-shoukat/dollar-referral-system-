<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserReferral;
use App\Models\Skyreferral;
use App\Models\Heavenreferral;
use App\Models\Buypackage;
use App\Models\Package;
use App\Models\User;
use App\Models\Withdraw;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);


        return view('dashboard')->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }

    }
     public function wallet()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
         $skrref = Skyreferral::with('user')->with('buypackage')->where('referred_by_id', auth()->user()->id)->count();
         $heavenreferral = Heavenreferral::with('user')->with('buypackage')->where('referred_by_id', auth()->user()->id)->count();
         $userReferral = UserReferral::with('user')->with('buypackage')->where('referred_by_id', auth()->user()->id)->count();
         $skrref = Skyreferral::with('user')->with('buypackage')->where('referred_by_id', auth()->user()->id)->count();
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                    return view('wallet')->with('checkref', $checkref)->with('skrref', $skrref)->with('heavenreferral', $heavenreferral)->with('userReferral', $userReferral)->with('checkuser', $checkuser);

        }
    
    }
     public function withdraw()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                    return view('withdraw')->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }

    }
     public function deposit()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                    return view('deposit')->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }
    }
     public function referral()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                  $refid = auth()->user()->id;
        $getalladmin = UserReferral::with('user')->with('buypackage')->where('referred_by_id', $refid)->orderBy('id', 'DESC')->paginate(10);
        return view('referral')->with('getalladmin', $getalladmin)->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }
        
      
    }
     public function sreferral()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                   $refid = auth()->user()->id;
        $getalladmin = Skyreferral::with('user')->with('buypackage')->where('referred_by_id', $refid)->orderBy('id', 'DESC')->paginate(10);
        return view('sreferral')->with('getalladmin', $getalladmin)->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }
        
      
    } 
    public function hreferral()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{

        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                   $refid = auth()->user()->id;
        $getalladmin = Heavenreferral::with('user')->with('buypackage')->where('referred_by_id', $refid)->orderBy('id', 'DESC')->paginate(10);
        return view('hreferral')->with('getalladmin', $getalladmin)->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }
       
      
    }
      public function plans()
    {
         $checkref = user::where(['id' => auth()->user()->id ])->first();
        $block = $checkref->is_admin;
        if ($block == 2) {

        return view('blocked');

        }else{
            
        $checkref = user::where(['id' => auth()->user()->id])->sum('balance');
        $withdraw = Withdraw::where(['user_id' => auth()->user()->id])->count();
        $withdrawapp = Withdraw::where('user_id' , auth()->user()->id)->where('app' , 1)->count();
        $withdrawall = Withdraw::where('app' , 1)->orderBy('id', 'DESC')->paginate(5);
        $checkuser = user::orderBy('id', 'DESC')->paginate(7);
                    $refid = auth()->user()->id;
         $ocean = "ocean";
         $sky = "sky";
         $heaven = "heaven";

        $oceanpack = Buypackage::where('user_id', $refid)->where('PackageName',$ocean)->where('app',1)->first();
        $skypack = Buypackage::where('user_id', $refid)->where('PackageName',$sky)->where('app',1)->first();
        $heavenpack = Buypackage::where('user_id', $refid)->where('PackageName',$heaven)->where('app',1)->first();
  
        return view('plan')->with('oceanpack', $oceanpack)->with('skypack', $skypack)->with('heavenpack', $heavenpack)->with('checkref', $checkref)->with('withdraw', $withdraw)->with('withdrawapp', $withdrawapp)->with('withdrawall', $withdrawall)->with('checkuser', $checkuser);

        }
        
    }
}
