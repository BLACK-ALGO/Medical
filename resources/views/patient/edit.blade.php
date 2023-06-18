@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
<div class="card card-info col-6 ">
    <div class="card-header text-center">
      <h3 class="card-title">Update Patient</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('patient.update', $patient -> id) }}" method="PATCH">
        @csrf

        

        <div class="card-body">
        <div class="form-group">
            <label><strong>Matricule:</strong></label>
            <input type="text" name="Matricule" class="form-control" value="{{ $patient->Matricule }}" placeholder="Enter matricule(patient-0125)">
          </div>

          <div class="form-group">
            <label><strong>Name:</strong></label>
            <input type="text" name="Name" class="form-control" value="{{ $patient->Name }}" placeholder="Enter patient Name...">
          </div>

          <div class="form-group">
            <label><strong>Sur Name:</strong></label>
            <input type="text" name="Sur_Name" class="form-control" value="{{ $patient->Sur_Name }}" placeholder="Enter patient Sur Name ">
          </div>

          <div class="form-group">
            <label><strong>Gender:</strong></label>
            <div>
              <select name="Gender"   class="form-control">
                <option value="{{ $patient->Gender }}" disable>{{ $patient->Gender }}</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
              </select>
              <!-- <input type="radio" name="Gender" value="M" class="" > <p>Male</p>
              <input type="radio" name="Gender" value="F" class="" ><p>Female</p> -->
            </div>
          </div>

          <div class="form-group">
            <label><strong>Birth Date:</strong></label>
            <input type="date" name="Birth_Date" class="form-control" value="{{ $patient->Birth_Date }}" placeholder="Enter patient Birthday">
          </div>

          <div class="form-group">
            <label><strong>Weight:</strong></label>
            <input type="number" name="Weight" class="form-control" value="{{ $patient->Weight }}" placeholder="Enter patient Weight...">
          </div>

          <div class="form-group">
            <label><strong>Height:</strong></label>
            <input type="number" name="Height" class="form-control" value="{{ $patient->Height }}" placeholder="Enter patient Height...">
          </div>


        </div>
        
      <!-- /.card-body -->
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Update Patient</button>
     </div>


     <div class="pull-right">
        <a class="btn btn-primary  m-5" href="{{ route('patient.index') }}"> Cancle</a>
    </div>

    </form>
  </div>
  </div>

  @endsection('content')
