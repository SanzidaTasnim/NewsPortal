@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="">
            <div class="row mb-2" style="display: flex; justify-content: space-between";>
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">Category</h3>
                </div>
                <div class="col-sm-2">
                    <ol class="breadcrumb float-right border-0">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}" style="text-decoration: none; font-weight: bold">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Category
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection
