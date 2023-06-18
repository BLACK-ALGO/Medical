@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title text-center"> <strong>LISTE OF CONSULTATION</strong></h3>
      <div class="card-tools d-flex align-items-right">
        <a class="btn btn-success" href="{{ route('consultation.create') }}"><i class="fa fa-user-plus fa-1.5x"></i>  Add New Consultation</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Matricule of Patient</th>
            <th>Consultation date</th>
            <th>Complaints</th>
            <th>Diagnostic</th>
            <th>Prescription</th>
            <th>Additional Examination</th>
            

          </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
          <tr>

            <td class="text-center ">{{ $consultation->matriculepatient }}</td>
            <td class="text-center">{{ $consultation->date }}</td>
            <td class="text-center">{{ $consultation->complaints }}</td>
            <td class="text-center">{{ $consultation->diagnostic }}</td>
            <td class="text-center">{{ $consultation->prescription }}</td>
            <td class="text-center col-60">{{ $consultation->additional_examination }}</td>
            
            <td class="text-center">
                <form action="{{ route('consultation.destroy',$consultation->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('consultation.show',$consultation->id) }}">DETAILS</a>

                    <a class="btn btn-primary" href="{{ route('consultation.edit',$consultation->id) }}"><i class="far fa-edit"></i>EDIT</a>

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
          {{ $consultations->links() }}
        </div>

    </div>
  </div>


@endsection('content')
