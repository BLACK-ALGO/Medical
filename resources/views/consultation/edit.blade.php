@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="card card-info col-6  p-4">
    <div class="card-header text-center">
      <h3 class="card-title">Update Consultation</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('consultation.update', $consultation -> id) }}" method="PATCH">
        @csrf

        

       

        <div class="form-group">
            <label><strong>Consultation Date:</strong></label>
            <input type="date" name="diagnostic" class="form-control" value="{{ $consultation->date }}" placeholder="Enter patient Birthday">
          </div>


          <div class="form-group">
            <label><strong>Complaints</strong></label>
            <input type="text" name="complaints" class="form-control" value="{{ $consultation->complaints }}" placeholder="Enter patient Sur Name ">
          </div>

          <div class="form-group">
            <label><strong>Diagnostic:</strong></label>
            <input type="text" name="date" class="form-control" value="{{ $consultation->diagnostic }}" placeholder="Enter patient Name...">
          </div>

          <div class="form-group">
            <label><strong>Prescription:</strong></label>
            <div class="mb-3">
              <textarea class="form-control" name="prescription" id=""   rows="5">{{ $consultation->prescription }}</textarea>
            </div>
          </div>

          <div class="form-group">
            <label><strong>Additional Examinations:</strong></label>
            <div class="mb-3">
              <textarea class="form-control" name="additional_examination" id=""   rows="5">{{ $consultation->additional_examinations }}</textarea>
            </div>
          </div>

          


        
        
      <!-- /.card-body -->
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Update Patient</button>
     </div>


     <div class="pull-right">
        <a class="btn btn-primary  m-5" href="{{ route('consultation.index') }}"> Cancle</a>
    </div>

    </form>
  </div>
  </div>
  </div>

  @endsection('content')
