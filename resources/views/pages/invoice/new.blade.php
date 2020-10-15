@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

@endpush

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('pricecategory.index')}}">Invoice</a></li>
    <li class="breadcrumb-item" aria-current="page">Create New Invoice</li>
    <li class="breadcrumb-item " aria-current="page">Select Customer Details</li>
    <li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
  </ol>
</nav>





<div class="row">
    
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create New Invoice</h4>
      
        <form class="cmxform" id="detailsform" method="get" action="{{route('invoice.new')}}" enctype="multipart/form-data">
          <fieldset>
              @csrf

              {{-- Customer Name --}}

              <div class="form-group">
                <label for="customer_id">Customer Name</label>
  
                <select class="js-example-basic-single w-100" name="customer_id" required="">
                 
                <option value="{{$customerdetails->id}}"  selected="selected" disabled="disabled">{{$customerdetails->fullname}} </option>
              
                </select>
              
              </div>

              {{-- Customer Name End --}}

              {{-- Product --}}
              <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                     <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                          <thead>
                            <tr>
                              <th>Consignment No</th>
                              <th>Referance No</th>
                              <th>Booking Date</th>
                              <th>Origin</th>
                              <th>Destination</th>
                              <th>Zone</th>
                              <th>Product</th>
                              <th>Actual Wt.(Kg)</th>
                              <th>Volumetric Wt Kgs</th>
                              <th>Chargable Wt Kgs</th>
                              <th>Amount Rs</th>
                            </tr>
                          </thead>
                          <tbody>
            <tr>

            <td>
                <input id="consignment_no" class="form-control" name="consignment_no[]" type="text" >
            </td>
           
                <td>
                    <input id="referance_no" class="form-control" name="referance_no[]" type="text" >
                </td>

                <td>
                    <input id="booking_date" class="form-control" name="booking_date[]" type="text" >
                </td>


                </tr>
                
                           
                         
                       
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
              {{-- Product End --}}



          


            

           
     

           
         
            <button class="btn btn-success" type="submit" id="submit">Generate Invoice</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
 
</div>










@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('assets/js/inputmask.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <script src="{{ asset('assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('assets/js/dropzone.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/timepicker.js') }}"></script>
  <script>
    $('#submit').click({
      this.prop('disabled', true);
    });
  </script>
@endpush