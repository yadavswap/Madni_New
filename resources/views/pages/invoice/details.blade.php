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
    <li class="breadcrumb-item active" aria-current="page">Select Customer Details</li>
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
            <div class="form-group">
              <label for="customer_id">Select Customer</label>

              <select class="js-example-basic-single w-100" name="customer_id" required="">
                <option value="">--Select Customer --</option>
                @foreach($customers as $customer)
              <option value="{{$customer->id}}"  @php if($customer->id == $id){ echo "selected='selected'"; }  @endphp>{{$customer->fullname}} - {{$customer->email}}</option>
                @endforeach
              </select>
            
            </div>


            {{-- Row Start Here --}}
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="provider">Select Provider</label>
          
                        <select class="js-example-basic-single w-100" name="provider" required="">
                          <option value="">--Select Provider --</option>
                          <option value="1">TNT</option>
                          <option value="2">Fedex</option>
                        </select>
                      
                      </div>
                </div>
                

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="type">Select Type</label>
          
                        <select class="js-example-basic-single w-100" name="type" required="">
                          <option value="">--Select Type --</option>
                       
                    <option value="0">Export</option>
                      <option value="1">Import</option>
                     
                         
                        </select>
                      
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="class">Select Class</label>
          
                        <select class="js-example-basic-single w-100" name="class" required="">
                          <option value="">--Select Class --</option>
                       
                      <option value="0">Economy</option>
                      <option value="1">Express</option>
                         
                        </select>
                      
                      </div>
                </div>
              

            </div>

            {{-- Row End Here --}}

           
     

           
         
            <button class="btn btn-primary" type="submit" id="submit">Process Next</button>
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