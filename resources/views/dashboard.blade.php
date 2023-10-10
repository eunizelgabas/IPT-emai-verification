@extends('base')

@include('_navbar')
@section('content')
    
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12" >
          <h1>Categories</h1>
          <table class="table table-bordered">
            <thead style="background-color: #BFACE0">
              <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>     
              </tr>   
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </body>
@endsection