@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center"> 
<div class="card d-flex justify-content-center col-6">
<div class="card-header">
  <h4 class="text-center">Patient Details</h4>




</div class="card-body d-flex justify-content-center">


<div class="">
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patient Name</span></div>
        <div class="bg-primary disabled color-palette"><span><strong>{{ $patient->Name }}</strong></span> <span><strong>{{ $patient->Sur_Name }}</strong></span></div>
    </div>
</div>

<div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patient Birthday</span></div>
        <div class="bg-primary disabled color-palette"><span><strong>{{ $patient->Birth_Date }}</strong></span> <span><strong>{{ $patient->Sur_Name }}</strong></span></div>
    </div>
</div>

  <div class="">
    <h4 class="text-center"></h4>

    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patient Gender</span></div>

            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $patient->Gender }}</strong></span>
            </div>


    </div>
  </div>

  <div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patien Weight</span></div>



            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $patient->Weight }}</strong></span>
            </div>


    </div>
  </div>

  <div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patien Height</span></div>



            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $patient->Height }}</strong></span>
            </div>


    </div>
  </div>



  <div class="card-footer">
    {{-- <button type="submit" class="btn btn-info btn-primary">Ajouter</button> --}}
    <a href="{{ route('patient.index') }}"><button class="btn btn-link btn-primary" ><i class="far fa-edit"></i>RETOURNER</button></a>
  </div>
</div>

  <div>

  </div>
</div>


@endsection
