@extends('base')

@include('_navbar')

@section('content')
<div class="container ">
    <div class="row">
      <div class="col-md-12 mt-2" >
        <div class="flex">
            <h1>Medicine List</h1>
            <a href="/medicine/create" type="button" class="btn float-end mb-lg-2" style="background-color:#BEADFA" >
                <i class="fa-solid fa-user-plus"></i> Add
              </a>
        </div>
      </div>
      <table class="table table-bordered">
        <thead style="background-color: #BFACE0">
        <tr>
            {{-- <th>Medicine ID</th> --}}
            <th>Name</th>
            <th>Dosage</th>
            <th>Expiry Date</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($medicine as $med)
            <tr>
                {{-- <td>{{ $med->id }}</td> --}}
                <td>{{ $med->name }}</td>
                <td>{{ $med->dosage }}</td>
                <td>{{ $med->expiry_date }}</td>
                <td>{{ $med->stock }}</td>
                <td>{{ $med->price }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ url('/medicine/edit/' . $med->id) }}"
                            class="btn btn-sm" style="background-color:#DEBACE; margin-right:5; height: 30px;"
                            title="Edit Medicine">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form method="POST" action="{{ url('/medicine/' . $med->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm" style="background-color:#da1b3e; height: 30px;" title="Delete Medicine">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
  </div>

@endsection
