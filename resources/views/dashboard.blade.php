@extends('base')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">Let's Talk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <form method="POST"  action="{{ route('logout') }}">
                @csrf <!-- Include a CSRF token for security -->
                <button class="nav-link" type="submit">Logout</button>
            </form>
            
        </li>

      </ul>
    </div>
  </nav>
   <h1 class="text-center "> Welcome, {{ $user->name }}</h1>
   <hr>
   <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($regUser as $user)
          
      <tr >
        <th scope="row">{{ $user->id }}</th>
        <td>{{$user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><button class="btn btn-danger">Delete</button> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection