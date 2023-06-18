@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center"> 
<div class="card d-flex justify-content-center col-6">
<div class="card-header">
  <h4 class="text-center">Consultation Details</h4>




</div class="card-body d-flex justify-content-center">


<div class="">
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Patient Matricule</span></div>
        <div class="bg-primary disabled color-palette"><span><strong>{{ $consultation->matriculepatient }}</strong></span> </div>
    </div>
</div>

<div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Consultation Birthday</span></div>
        <div class="bg-primary disabled color-palette"><span><strong>{{ $consultation->date }}</strong></span></div>
    </div>
</div>

  <div class="">
    <h4 class="text-center"></h4>

    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Complaints</span></div>

            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $consultation->complaints }}</strong></span>
            </div>


    </div>
  </div>

  <div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>diagnostic</span></div>



            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $consultation->diagnostic }}</strong></span>
            </div>


    </div>
  </div>

  <div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Prescription</span></div>



            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $consultation->prescription }}</strong></span>
            </div>


    </div>
  </div>

  <div class="">
    <h4 class="text-center"></h4>
    <div class="color-palette-set">
        <div class="bg-primary color-palette"><span>Additional Examinations</span></div>



            <div class="bg-primary disabled color-palette">
                <span><strong>{{  $consultation->additional_examinations }}</strong></span>
            </div>


    </div>
  </div>



  <div class="card-footer">
    {{-- <button type="submit" class="btn btn-info btn-primary">Ajouter</button> --}}
    <a href="{{ route('consultation.index') }}"><button class="btn btn-link btn-primary" ><i class="far fa-edit"></i>RETOURNER</button></a>
  </div>
</div>

  <div>

  </div>
</div>


@endsection
