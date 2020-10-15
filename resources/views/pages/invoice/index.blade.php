@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Invoice</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>




<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
   
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    
   
    
    <a href="{{route('invoice.create')}}"><button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-plus"></i>
      Create New Invoice
      </button></a>
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
                  <th>Invoice ID</th>
                  <th>Customer Name</th>
                  <th>Invoice Date</th>
                  <th>Gross Amount</th>
                  <th>Generate Invoice</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                $i =1;
              @endphp

@foreach ($invoices as $invoice)
<tr>

<th>{{$i}}</th>
  <td>{{$invoices->id}}</td>
  <td>{{$customer->fullname}}</td>
  <td>{{$customer->invoice_date}}</td>
  <td>{{$customer->gross_amount}}</td>
  <td><button class="btn btn-sm btn-info">Generate Invoice</button></td>
  <td>
    
    <div class="row">
      <div class="col-md-6">    
        <a href="" title="edit"> 
           <button class="btn btn-sm btn-info"><i class="fa fa-pencile"></i></button>
          </a>
        </div>
        <div class="col-md-6">    
          <a href=""> 
             <button class="btn btn-sm btn-info"><i class="fa fa-trash-o" title="delete"></i></button>
            </a>
          </div>
      </div>
        </td>
      
    

  <td>
      <div class="row">
          <div class="col-md-4"><button class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></div>
          <div class="col-md-4"><a onclick="return confirm('Are you sure you want to delete this record?')" href="{{route('customers.delete',$customer->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></button></div>
            <div class="col-md-4"><button class="btn btn-sm btn-info"><a href="{{route('customers.delete',$customer->id)}}"><i class="fa fa-file-o" aria-hidden="true"></i></a></button></div>

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

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush