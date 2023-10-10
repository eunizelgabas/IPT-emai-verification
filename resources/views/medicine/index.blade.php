@extends('base')

@include('_navbar')

@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12" >
        <div class="flex">
            <h1>Medicine List</h1>
            <button type="button" class="btn float-end mb-lg-2" style="background-color:#BEADFA" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                <i class="fa-solid fa-user-plus"></i> Add
              </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-dark" style="background-color:#BEADFA">
                        <h1 class="modal-title fs-5 " id="add">Add Medicine</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>   
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="dosage">Dosage</label>
                                <input type="text" class="form-control" id="dosage" >
                              </div>
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                              </div>
                            </div>
                          </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i> Close
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-plus"></i> Create Medicine
                        </button>
                    </div>
              
                </div>
            </div>
        </div>
        <table class="table table-bordered">
          <thead style="background-color: #BFACE0">
            <tr>
              <th>Medicine ID</th>
              <th>Name</th>
              <th>Dosage</th>
              <th>Expiry Date</th>
              <th>Stock</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>  
              <td></td>
              <td></td>   
            </tr>   
          </tbody>
        </table>
      </div>
    </div>
  </div> 
@endsection