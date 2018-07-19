@extends('layouts.adminDashboard')

@section('content') 
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row m-t-25">
                         <div class="col-sm-6 col-md-6">
                            <div class="overview-item overview-item--c1">
                                 <div class="overview__inner">
                                     <div class="overview-box clearfix">
                                        <div class="icon">
                                             <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <span>Total Numbers of Customers</span>
                                            <h2>{{$userCount}}</h2>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="overview-item overview-item--c2">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                                </div>
                                                <div class="text">
                                                    <span>Total Numbers of Guards</span>
                                                    <h2>{{$guardCount}}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                   <div class="overview-item overview-item--c4">
                                        <div class="overview__inner">
                                            <div class="overview-box clearfix">
                                               <div class="icon">
                                                    <i class="zmdi zmdi-account-o"></i>
                                               </div>
                                               <div class="text">
                                                   <span>Total Registered Customers</span>
                                                   <h2>{{$totalUsers}}</h2>
                                               </div>
                                           </div>
                                           </div>
                                           </div>
                                       </div>
                    </div>
                </div>
            </div>
        </div>
                                       
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                            
                            
                            
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
@endsection