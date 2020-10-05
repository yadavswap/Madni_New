@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    
   
    
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-users"></i>
      Create New Customer
      </button>
    </div>
  </div>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Customers List</h6>
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>LAST NAME</th>
                  <th>USERNAME</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th>2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th>3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th>4</th>
                  <td>Larry</td>
                  <td>Jellybean</td>
                  <td>@lajelly</td>
                </tr>
                <tr>
                  <th>5</th>
                  <td>Larry</td>
                  <td>Kikat</td>
                  <td>@lakitkat</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection