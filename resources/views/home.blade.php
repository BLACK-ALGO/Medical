@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-8 ">
            <div class="card d-flex justify-content-center text-center">
                <div class="card-header" d-flex justify-content-center>{{ __('Dashboard') }}</div>

                <div class="card-body flex-column justify-content-center text-center">
                    <div><h1>Welcome To Our Medical Center<h1></div>
                    
                    <div class="d-flex justify-content-center">
                    <a name="" id="" class="btn btn-primary" href="{{ route('patient.index') }}" role="button">Get Patient</a>     
                    </div>
                    <div class="d-flex justify-content-center">
                    <a name="" id="" class="btn btn-primary m-3" href="{{ route('consultation.index') }}" role="button">Get Consultations</a>     
                    </div>
                
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
