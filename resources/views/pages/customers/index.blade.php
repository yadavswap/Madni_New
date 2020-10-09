@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>




<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
   
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    
   
    
    <a href="{{route('customers.create')}}"><button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-plus"></i>
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
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Price Category</th>
                  <th>Download Price Sheet</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i =1;
              @endphp
    
                  @foreach ($customers as $customer)
                  <tr>
                
                  <th>{{$i}}</th>
                    <td>{{$customer->fullname}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->mobile}}</td>
                    <td>{{$customer->category->price_category_name}}</td>
                    <td><a href="{{url('uploads/'.$customer->category->file_path)}}">  <button class="btn btn-sm btn-info"><i class="fa fa-files-o"></i></button></a></td>
                   
                    <td>
                        <div class="row">
                            <div class="col-md-6"><button class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></div>
                            <div class="col-md-6"><a onclick="return confirm('Are you sure you want to delete this record?')" href="{{route('customers.delete',$customer->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                        </div>
                    </td>

                  @endforeach
                 
                 
                </tr>
               
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection