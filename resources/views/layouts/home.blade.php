@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="">
            <div class="row mb-2" style="display: flex; justify-content: space-between";>
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Dashboard</h3>
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-right border-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}" style="text-decoration: none; font-weight: bold">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="statistics-details d-flex align-items-center justify-content-between">
        <div>
            <p class="statistics-title">Bounce Rate</p>
            <h3 class="rate-percentage">32.53%</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
        </div>
        <div>
            <p class="statistics-title">Page Views</p>
            <h3 class="rate-percentage">7,682</h3>
            <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
        </div>
        <div>
            <p class="statistics-title">New Sessions</p>
            <h3 class="rate-percentage">68.8</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
        </div>
        <div class="d-none d-md-block">
            <p class="statistics-title">Avg. Time on Site</p>
            <h3 class="rate-percentage">2m:35s</h3>
            <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
        </div>
        <div class="d-none d-md-block">
            <p class="statistics-title">New Sessions</p>
            <h3 class="rate-percentage">68.8</h3>
            <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
        </div>
    </div>
@endsection
