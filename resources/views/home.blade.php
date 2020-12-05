@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDOS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(Session::has('message'))
                            <div class="alert alert-success alert-dismissible" role = "alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <label class="text-center"> {{Session::get('message')}}</label>
                            </div>
                        @endif
                    {{ __('Bienvenido a KAIRA DEVELOPMENT AND OPERATIONS!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
