@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Price Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lists</li>
  </ol>

</nav>





<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
   
    <div class="d-flex align-items-center flex-wrap text-nowrap">
    
   
    
    <a href="{{route('pricecategory.create')}}"><button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="fa fa-plus"></i>
    Add New Category
      </button></a>
    </div>
  </div>

<div class="row">

  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Category List</h6>
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Price Category Name</th>
                  <th>
                    
                    
                    <div class="row">
                      <div class="col-md-4">
                        TNT SHEET
                      </div>
                      <div class="col-md-4">
                        FEDEX SHEEt
                      </div>
                    </div>

                  </th>
                  <th>Action</th>

                 
                </tr>
              </thead>
              <tbody>
                <tr>
                 @php
                 $i = 1;
                 @endphp


                  @foreach ($pricecategory as $category)
                <td>{{$i}}</td>
                <td>{{$category->price_category_name}}</td>

                <td>
                  <div class="row">
                    <div class="col-md-4">
                      <a href="{{url('uploads/'.$category->tnt_file_path)}}" target="_blank"> <button class="btn btn-sm btn-success"><i class="fa fa-download"></i></button></a>
                    </div>
                    <div class="col-md-4">
                      <a href="{{url('uploads/'.$category->fedex_file_path)}}" target="_blank"> <button class="btn btn-sm btn-success"><i class="fa fa-download"></i></button></a>
                    </div>
                  </div>
                 

            </td>

            <td>

              <a  onclick="return confirm('Are you sure you want to delete this record?')" href="{{route('pricecategory.delete',$category->id)}}" > <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>

        </td>

                @php
                $i++;
                @endphp
                </tr>
                  @endforeach

             
               
               
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection