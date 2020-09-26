<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\UserReferral;
use App\Models\Skyreferral;
use App\Models\Heavenreferral;
use App\Models\Buypackage;
use App\Models\Package;
use App\Models\User;
use App\Models\Withdraw;

use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $userModel;

    public function __construct()
    {
        $this->userModel = new Admin();
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getalladmin = Admin::all();
     
        return view('admin.dashboard');
    }

    public function reject($id)
    {
        $addapp = Admin::where('id', $id)->delete();
        $getalladmin = Admin::all();
        return view('admin.dashboard', ['getalladmin' => $getalladmin]);
    }

    protected function makeadmin(Request $request)
    {
        $userData = [
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ];
        $createdUser = $this->userModel->create($userData);
        return redirect()->route('dashboard');
    }

    protected function update($id)
    {
        $re = $id;
        return view('admin.updatepass')->with('re', $re);

    }

    public function updateadmin(Request $request,$id)
    {
      $updateid = $id;
        $re = $id;
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);

        //Change Password

        $adminpass = Admin::where(['id' => $updateid ])->first();
        $user = $adminpass->password;
        if (Hash::check($request->oldpassword, $user)) {
            $adminpass->password = Hash::make($request->password);
            $adminpass->save();
            return redirect()->route('dashboard')->with(['success' => true, 'message' => 'Password change successfull']);


        } else {
            return view('admin.updatepass')->with('re', $re)->with(['error' => true, 'message' => 'Current password is invalid']);

        }

    }
    public function adminwithdraw($apply)
    {
         $jazzid = $apply;
        $getalladmin = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'perfectmoney')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin2 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'bitcoin')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin3 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'advcash')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin4 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'cashmaal')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin5 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'jazzcash')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin6 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'easypaisa')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin7 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'skrill')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        $getalladmin8 = Withdraw::with('user')->where('user_id', auth()->user()->id)->where('Platform', 'payeer')->where('app', 0)->where('del', 0)->orderBy('id', 'DESC')->paginate(10);
        return view('admin.jazzcashuser')->with('getalladmin', $getalladmin)->with('getalladmin2', $getalladmin2)->with('getalladmin3', $getalladmin3)->with('getalladmin4', $getalladmin4)->with('getalladmin5', $getalladmin5)->with('getalladmin6', $getalladmin6)->with('getalladmin7', $getalladmin7)->with('getalladmin8', $getalladmin8)->with('jazzid', $jazzid);
     
    }
    public function showwithdraw()
    {
       
        return view('admin.easypaisauser');
    }
    public function approvedpm($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
        return redirect()->route('showwithdraw');
    }
     public function approvedbtc($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
          return redirect()->route('showwithdraw');
    }
     public function approvedadvcash($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
          return redirect()->route('showwithdraw');
    }
     public function approvedcashmaal($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
           return redirect()->route('showwithdraw');
    }
     public function approvedjazz($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
          return redirect()->route('showwithdraw');
    }
     public function approvedpaisa($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
           return redirect()->route('showwithdraw');
    }
     public function approvedskrill($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
          return redirect()->route('showwithdraw');
    }
     public function approvedpayeer($id)
    {
         $addapp = Withdraw::where('id',$id)->update(['app' => 1]);
           return redirect()->route('showwithdraw');
    }






public function rejectdpm($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
        return redirect()->route('showwithdraw');
    }
     public function rejectdbtc($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
          return redirect()->route('showwithdraw');
    }
     public function rejectdadvcash($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
          return redirect()->route('showwithdraw');
    }
     public function rejectdcashmaal($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
           return redirect()->route('showwithdraw');
    }
     public function rejectdjazz($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
          return redirect()->route('showwithdraw');
    }
     public function rejectdpaisa($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
           return redirect()->route('showwithdraw');
    }
     public function rejectdskrill($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
          return redirect()->route('showwithdraw');
    }
     public function rejectdpayeer($id)
    {
         $addapp = Withdraw::where('id',$id)->delete();
           return redirect()->route('showwithdraw');
    }





     public function oceanreq()
    {
          $getalladmin = Buypackage::with('user')->where('app', 0)->where('del', 0)->paginate(10);
           return view('admin.easywith')->with('getalladmin', $getalladmin);
    }























     public function deloceanpack($id)
    {
            $activeapproval = Buypackage::where('id', $id)->delete();
                     return redirect()->route('oceanreq');
   
    }


    public function appoceanpack($id)
    {
        $appid = $id;
        $activeapproval = User::where('id', $appid)->first();

           $getalljazzcashuser = UserReferral::where(['user_id' => $id])->first();

        if ($getalljazzcashuser) {

            $refid = $getalljazzcashuser->referred_by_id;
            $refcheckpackage_o = $getalljazzcashuser->ref_o;
            $refcheckpackage_s = $getalljazzcashuser->ref_s;
            $refcheckpackage_h = $getalljazzcashuser->ref_h;

            $checkreqpackage = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'ocean'])->where(['app' => 0])->first();
if ($checkreqpackage) {
  
           $approvedwithoutcheckreqpackage = $checkreqpackage->PackageName;


        if ($approvedwithoutcheckreqpackage == 'ocean') {

        if ($refcheckpackage_o == 1 && $refcheckpackage_s == 0 && $refcheckpackage_h == 0) {

            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 3.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
             $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'ocean'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['oceanpack' => 1]);
            $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['ocean' => 1]);
            return redirect()->route('oceanreq');

        }
        if($approvedwithoutcheckreqpackage == 'ocean'){

            if ($refcheckpackage_o == 1 && $refcheckpackage_s == 1 && $refcheckpackage_h == 0) {

            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 3.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
             $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'ocean'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['oceanpack' => 1]);
            $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['ocean' => 1]);
            return redirect()->route('oceanreq');

        }

        }
         if($approvedwithoutcheckreqpackage == 'ocean'){

            if ($refcheckpackage_o == 1 && $refcheckpackage_s == 1 && $refcheckpackage_h == 1) {

            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 3.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
             $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'ocean'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['oceanpack' => 1]);
            $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['ocean' => 1]);
            return redirect()->route('oceanreq');

        }

        }
           
           }

}
            $checkreqpackagesky = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'sky'])->where(['app' => 0])->first();
            if ($checkreqpackagesky) {
  
           $approvedwithoutcheckreqpackagesky = $checkreqpackagesky->PackageName;

        if ($approvedwithoutcheckreqpackagesky == 'sky') {

        if ($refcheckpackage_o == 1 && $refcheckpackage_s == 1 && $refcheckpackage_h == 0) {
           
            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 5.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
                 $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'sky'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['skypack' => 1]);
            $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['sky' => 1]);
            return redirect()->route('oceanreq');

}
            if($approvedwithoutcheckreqpackagesky == 'sky'){

            if ($refcheckpackage_o == 1 && $refcheckpackage_s == 1 && $refcheckpackage_h == 1) {

            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 5.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
                 $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'sky'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['skypack' => 1]);
            $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['sky' => 1]);
            return redirect()->route('oceanreq');

        }

        }

            
       }


   }
     $checkreqpackageheaven = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'heaven'])->where(['app' => 0])->first();
            if ($checkreqpackageheaven) {
             $approvedwithoutcheckreqpackageheaven = $checkreqpackageheaven->PackageName;

          if ($approvedwithoutcheckreqpackageheaven == 'heaven') {

        if ($refcheckpackage_o == 1 && $refcheckpackage_s == 1 && $refcheckpackage_h == 1) {

            $addbalenceuser = User::where(['id' => $refid])->first();
            $preamount = $addbalenceuser->balance;
            $addbanlenc = $preamount + 7.5;
            $addbanlenc2 = User::where('id', $refid)->update(['balance' => $addbanlenc]);
             $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'heaven'])->update(['app' => 1]);
           $getalljazzcashuser2 = User::where(['id' => $id])->update(['heavenpack' => 1]);
           $getalljazzcashuser3 = Package::where(['user_id' => $id])->update(['heaven' => 1]);
            return redirect()->route('oceanreq');
}
        
           
           }
       }
       
     

    }
   
        $approvedwithoutrefocean = Buypackage::where(['user_id' => $id])->where(['app' => 0])->first();

        $approvedwithoutrefocean2 = $approvedwithoutrefocean->PackageName;

        if ($approvedwithoutrefocean2 == 'ocean') {

            $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'ocean'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['oceanpack' => 1]);
                            return redirect()->route('oceanreq');

        }

          if ($approvedwithoutrefocean2 == 'sky') {

            $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'sky'])->update(['app' => 1]);
            $getalljazzcashuser2 = User::where(['id' => $id])->update(['skypack' => 1]);
                            return redirect()->route('oceanreq');


        }

          if ($approvedwithoutrefocean2 == 'heaven') {

           $getalljazzcashuser1 = Buypackage::where(['user_id' => $id])->where(['PackageName' => 'heaven'])->update(['app' => 1]);
           $getalljazzcashuser2 = User::where(['id' => $id])->update(['heavenpack' => 1]);
                           return redirect()->route('oceanreq');

        }

     

    }








     public function skyreq()
    {
         
          $getalladmin = Buypackage::with('user')->where('app', 0)->where('del', 0)->where('PackageName', 'sky')->orderBy('id', 'DESC')->paginate(10);
          return view('admin.paywith')->with('getalladmin', $getalladmin);
    }

    


     public function heavenreq ()
    {
         
          $getalladmin = Buypackage::with('user')->where('app', 0)->where('del', 0)->where('PackageName', 'heaven')->orderBy('id', 'DESC')->paginate(10);
          return view('admin.skrillwith')->with('getalladmin', $getalladmin);
    }

    






}
