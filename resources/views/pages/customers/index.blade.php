@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>


@if(Session::has('success'))

<div class="alert alert-success">

    {{ Session::get('success') }}

    @php

    Session::forget('success');

    @endphp

</div>

@endif

@if(Session::has('error'))

<div class="alert alert-danger">

    {{ Session::get('danger') }}

    @php

    Session::forget('danger');

    @endphp

</div>

@endif


<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    
   
    
    <a href="{{route('customers.create')}}"><button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-user"></i>
      Create New Customer
      </button></a>
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
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Price Category</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Mark</td>
                  <td>LastName</td>
                  <td>Otto@mdo.com</td>
                  <td>+91-1122334455</td>
                  <td>Premium Category</td>
                  <td>
                      <div class="row">
                          <div class="col-md-6"><button class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></div>
                          <div class="col-md-6"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></div>
                      </div>
                  </td>
                </tr>
               
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection