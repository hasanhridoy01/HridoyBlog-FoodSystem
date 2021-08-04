@extends('admin.layouts/app')

@section('main-content')

<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-12">
                    <h3 class="page-title">Welcome {{Auth::user() -> name}} !</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="far fa-user"></i>
                            </span>
                            <div class="dash-widget-info">
                                <h3>429</h3>
                                <h6 class="text-muted">Users</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fas fa-user-shield"></i>
                            </span>
                            <div class="dash-widget-info">
                                <h3>148</h3>
                                <h6 class="text-muted">Providers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="fas fa-qrcode"></i>
                            </span>
                            <div class="dash-widget-info">
                                <h3>124</h3>
                                <h6 class="text-muted">Services</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-primary">
                                <i class="far fa-credit-card"></i>
                            </span>
                            <div class="dash-widget-info">
                                <h3>$11378</h3>
                                <h6 class="text-muted">Subscription</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection