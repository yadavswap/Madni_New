@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>




<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
   
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    <a href="{{route('customers.create')}}">
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-plus"></i>
      Create New Customer
      </button>
    </a>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
         <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Price Category</th>
                  <th>Download Sheet</th>
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
  <td>
    
    <div class="row">
      <div class="col-md-6">    
        <a href="{{url('uploads/'.$customer->category->tnt_file_path)}}" title="tnt sheet"> 
           <button class="btn btn-sm btn-info"><i class="fa fa-files-o"></i></button>
          </a>
        </div>
        <div class="col-md-6">    
          <a href="{{url('uploads/'.$customer->category->fedex_file_path)}}"> 
             <button class="btn btn-sm btn-info"><i class="fa fa-files-o" title="fedex sheet"></i></button>
            </a>
          </div>
      </div>
        </td>
      
    

  <td>
      <div class="row">
          <div class="col-md-4"><button class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></div>
          <div class="col-md-4"><a onclick="return confirm('Are you sure you want to delete this record?')" href="{{route('customers.delete',$customer->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></div>
            <div class="col-md-4"><a href="{{route('invoice.create',$customer->id)}}"><button class="btn btn-sm btn-info"><i class="fa fa-file-o" aria-hidden="true"></i></button></a></div>

      </div>
  </td>

  @php
      
      $i ++;
  
  @endphp
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

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush