@extends('layouts.master')

@section('title')
    <title>Dashboard - Simanda 2017</title>
@endsection

@section('content')
    <!-- START PAGE HEADING -->
    <div class="app-heading app-heading-bordered app-heading-page">
        <div class="title">
            <h1>Fixed Navigation</h1>
            <p>Layout with fixed navigation</p>
        </div>               
    </div>
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="#">Application</a></li>
            <li><a href="#">Layout Examples</a></li>
            <li class="active">Fixed Navigation</li>
        </ul>
    </div>
    <!-- END PAGE HEADING -->

    <!-- START PAGE CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>
                        <!-- START WIDGET -->
                        <div class="app-widget-tile">
                            <div class="line">
                                <div class="title">Sales Per Month</div>
                                <div class="title pull-right"><span class="label label-success label-ghost label-bordered">+14.2%</span></div>
                            </div>                                        
                            <div class="intval">9,427</div>                                        
                            <div class="line">
                                <div class="subtitle">Total items sold</div>
                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                            </div>
                        </div>                                                                        
                        <!-- END WIDGET -->
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="line">
                                <div class="title">Visitors</div>
                                <div class="title pull-right"><span class="label label-warning label-ghost label-bordered">-3.5%</span></div>
                            </div>                                        
                            <div class="intval">99,573</div>
                            <div class="line">
                                <div class="subtitle">Visitors per month</div>
                                <div class="subtitle pull-right text-warning"><span class="icon-arrow-down"></span> normal</div>
                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </li>
                </ul>                      
            </div>
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="icon-bubble"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Messages</div>         
                                        <div class="title pull-right"><span class="label label-success label-ghost label-bordered">3 NEW</span></div>
                                    </div>                                        
                                    <div class="intval text-left">39 / 1,589</div>                                        
                                    <div class="line">
                                        <div class="subtitle"><a href="#">Open all messages</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0 margin-top-0">
                    <li>                                        
                        <!-- START WIDGET -->
                        <div class="app-widget-tile app-widget-highlight">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon icon-lg">
                                        <span class="icon-database"></span>
                                    </div>
                                </div>
                                <div class="col-sm-8">                                                    
                                    <div class="line">
                                        <div class="title">Database Load</div>
                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                    </div>                                        
                                    <div class="intval text-left">43.16%</div>
                                    <div class="line">
                                        <div class="subtitle">4/10 databases used</div>
                                    </div>
                                </div>
                            </div>                                            
                        </div>
                        <!-- END WIDGET -->                                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER -->
@endsection

@section('pagescripts')    
  {{--  NONE  --}}
@endsection