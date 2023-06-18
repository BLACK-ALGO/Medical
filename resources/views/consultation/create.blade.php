@extends('layouts.app')

@section('content')
<div class="row  justify-content-center">
<div class="card card-info col-6 p-4">
    <div class="card-header text-center">
      <h3 class="card-title">Add A New Patient</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal p-4" action="{{ route('consultations.store') }}" method="POST">
        @csrf

        

        <div class="form-group">
            <select class="form-control" name="matriculepatient">
                <option>Select Patient</option>
                @foreach($patients as $patient)
              <option  value="{{ $patient->Matricule }}">{{ $patient->Name }} {{ $patient->Sur_Name }}</option>
              @endforeach

            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="patient_id">
                <option>Select Consultation</option>
                @foreach($patients as $patient)
              <option  value="{{ $patient->id }}">{{ $patient->id }}</option>
              @endforeach

            </select>
          </div>

          <div class="form-group">
            <label><strong>Consultation Date:</strong></label>
            <input type="date" name="date" class="form-control" placeholder="Enter consultation Birthday">
          </div>

          <div class="form-group">
            <label><strong>Complaints:</strong></label>
            <input type="text" name="complaints" class="form-control" placeholder="Enter patient Complaints ">
          </div>
      

          <div class="form-group">
            <label><strong>Diagnostic:</strong></label>
            <input type="text" name="diagnostic" class="form-control" placeholder="Enter patient Weight...">
          </div>

          <div class="form-group">
            <label><strong>Prescription:</strong></label>
            <div class="mb-3">
              <textarea class="form-control" name="prescription" id=""   rows="5"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label><strong>Additional Examinations:</strong></label>
            <div class="mb-3">
              <textarea class="form-control" name="additional_examinations" id=""   rows="5"></textarea>
            </div>
          </div>


        
        
      <!-- /.card-body -->
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary m-3">ENREGISTRER</button>
     </div>
     <div class="pull-right">
        <a class="btn btn-primary  m-5" href="{{ route('consultations.index') }}"> Back To List</a>
    </div>
    </div>

    </form>
  </div>
  </div>

  @endsection('content')
