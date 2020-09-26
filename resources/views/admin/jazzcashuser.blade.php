
<x-adminlinkbar/>
<!-- left sidebar -->
<!-- ============================================================== -->
<x-pxadminsidebar/>
<!-- ============================================================== -->
<!-- end left sidebar -->

<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">GotJobPak Dashboard  </h2>
                        <p class="pageheader-text"></p>
                        <div class="page-breadcrumb">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="ecommerce-widget">

                <div class="row">




                </div>
                <div class="row">
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->

                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                         @if ($jazzid == 'perfectmoney')
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws </h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Perfectmoney Userid</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->perfectmoneyuserid}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                           
                                <td> <a href="{{ route('approvedpm', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                                  <td> <a href="{{ route('rejectdpm', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>
                           
                             
                             

                           
                        </tr>
                    @endforeach

                                        </tbody>
                                    </table>
                                      {{$getalladmin->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                      @if ($jazzid == 'Bitcoin')

                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">bitcoinaddress</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin2 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->bitcoinaddress}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                            <td> <a href="{{ route('approvedbtc', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                              <td> <a href="{{ route('rejectdbtc', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>

                          
                        </tr>
                    @endforeach

                                        </tbody>
                                    </table>
                                      {{$getalladmin2->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
 @if ($jazzid == 'AdvCash')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                           <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Advcash Email</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach ($getalladmin3 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->advcash}}</td>
                              <td>${{$getalladmins->amount}}</td>
                          <td> <a href="{{ route('approvedadvcash', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                          <td> <a href="{{ route('rejectdadvcash', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>

                          
                        </tr>
                    @endforeach
                                        </tbody>
                                    </table>
                                     {{$getalladmin3->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                     @if ($jazzid == 'CashMaal')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                              <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">CashMaal Email</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin4 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->cashmail}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                            <td> <a href="{{ route('approvedcashmaal', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                                <td> <a href="{{ route('rejectdcashmaal', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>

                            
                        </tr>
                    @endforeach

                                        </tbody>
                                    </table>
                                    {{$getalladmin4->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif

 @if ($jazzid == 'Jazz')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                           <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Jazz cash Username</th>
                                                <th class="wd-20p border-bottom-0">Jazz Cash Number</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                      @foreach ($getalladmin5 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->JazzCashName}}</td>
                             <td>{{$getalladmins->JazzCashphone}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                            <td> <a href="{{ route('approvedjazz', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                               <td> <a href="{{ route('rejectdjazz', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>

                           
                        </tr>
                    @endforeach
                                          

                                        </tbody>
                                    </table>
                                      {{$getalladmin5->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
  @if ($jazzid == 'Paisa')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                             <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                               <th class="wd-20p border-bottom-0">Easy Paisa Username</th>
                                                <th class="wd-20p border-bottom-0">Easy Paisa Number</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach ($getalladmin6 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->paisaName}}</td>
                             <td>{{$getalladmins->easypaisaphone}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                             <td> <a href="{{ route('approvedpaisa', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                                <td> <a href="{{ route('rejectdpaisa', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>
                        </tr>
                    @endforeach

                                        </tbody>
                                    </table>
                                     {{$getalladmin6->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                     @if ($jazzid == 'Skrill')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Skrill Email</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($getalladmin7 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->skrillmail}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                           
                             <td> <a href="{{ route('approvedskrill', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                                <td> <a href="{{ route('rejectdskrill', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>
                        </tr>
                    @endforeach

                                        </tbody>
                                    </table>
                                     {{$getalladmin7->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

    <!-- row -->
                  @if ($jazzid == 'Payeer')
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">{{$jazzid}} Withdraws</h5>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                           <th class="wd-15p border-bottom-0">User name</th>
                                                <th class="wd-15p border-bottom-0">Email</th>
                                                <th class="wd-20p border-bottom-0">Payeer Email</th>
                                                <th class="wd-15p border-bottom-0">Amount</th>
                                            
                                                <th class="wd-25p border-bottom-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach ($getalladmin8 as $getalladmins)
                        <tr>
                            <td>{{$getalladmins->user->name}}</td>
                            <td>{{$getalladmins->user->email}}</td>
                            <td>{{$getalladmins->payeeremail}}</td>
                              <td>${{$getalladmins->amount}}</td>
                           
                            <td> <a href="{{ route('approvedpayeer', [$getalladmins->id]) }}"><button class="btn-success" style="margin-left: 0px; "  type="submit" name="submit">Approved</button></a></td>

                                <td> <a href="{{ route('rejectdpayeer', [$getalladmins->id]) }}"><button class="btn-danger" style="margin-left: 0px; "  type="submit" name="submit">Reject</button></a></td>
                        </tr>
                    @endforeach
                             

                                        </tbody>
                                    </table>
                                     {{$getalladmin8->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                      @endif
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->


                </div>





                <!-- ============================================================== -->
                <!-- end total orders  -->
                <!-- ============================================================== -->
            </div>

            <x-pxadminfooter/>

