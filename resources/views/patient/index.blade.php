@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title text-center"> <strong>LIST OF PATIENT</strong></h3>
      <div class="card-tools d-flex align-items-right">
        <a class="btn btn-success" href="{{ route('patient.create') }}"><i class="fa fa-user-plus fa-1.5x"></i>  Add New Patient</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Matricule</th>
            <th>Name</th>
            <th>Sur Name</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Weight</th>
            <th>Height</th>

          </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
          <tr>

            <td class="text-center">{{ $patient->Matricule }}</td>
            <td class="text-center">{{ $patient->Name }}</td>
            <td class="text-center">{{ $patient->Sur_Name }}</td>
            <td class="text-center">{{ $patient->Gender }}</td>
            <td class="text-center">{{ $patient->Birth_Date }}</td>
            <td class="text-center">{{ $patient->Weight }}</td>
            <td class="text-center">{{ $patient->Height }}</td>
            <td class="text-center">
                <form action="{{ route('patient.destroy',$patient->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('patient.show',$patient->id) }}">DETAILS</a>

                    <a class="btn btn-primary" href="{{ route('patient.edit',$patient->id) }}"><i class="far fa-edit"></i>EDIT</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>DELETE</button>
                </form>

            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <div class="card-footer ">
        <div class="float-right">
          {{ $patients->links() }}
        </div>

    </div>
  </div>


@endsection('content')
