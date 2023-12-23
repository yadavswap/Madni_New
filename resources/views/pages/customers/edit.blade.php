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
    <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create Customers</li>
  </ol>
</nav>



<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create New Customer</h4>
      
        <form class="cmxform" id="signupForm" method="post" action="{{route('customers.update',$customer->id)}}">
          <fieldset>
              @csrf
              
            <div class="form-group">
              <label for="name">Fullname</label>
            <input id="name" class="form-control" name="fullname" type="text" required="" value="{{$customer->fullname}}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" name="email" type="email"  required="" value="{{$customer->email}}">
            </div>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input id="mobile" class="form-control" name="mobile" type="text" maxlength="10"  required="" value="{{$customer->mobile}}">
            </div>

            <div class="form-group">
                <label for="gstin">GSTIN</label>
                <input id="gstin" class="form-control" name="gstin" type="text" maxlength="24" value="{{$customer->gstin}}">
              </div>

              
              <div class="form-group">
                <label for="country">Country</label>
                <select class="js-example-basic-single w-100" name="country" required="" id="country" >

                    <option value="" selected="selected">--Select Country -- </option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}" @php if($customer->country_id == $country->id){ echo "selected='selected'"; }  @endphp>{{$country->emoji}} - {{$country->name}}</option>
                    @endforeach
                    
                   
                  </select>
              </div>

              



              <div class="form-group">
                <label for="state">State</label>
                <input id="state" class="form-control" name="state" type="text" required="" value="{{$customer->state}}">
              </div>

              <div class="form-group">
                <label for="pincode">Pincode</label>
                <input id="pincode" class="form-control" name="pincode" type="pincode" required="required" maxlength="7" value="{{$customer->pincode}}">
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" class="form-control" name="address" type="address" required="required" >
                    {{$customer->address}}
                </textarea>
              </div>



              <div class="form-group">
                <label for="price_category">Price Category</label>
                <select class="js-example-basic-single w-100" name="price_category" required="">
                    <option value="">--Select Categories--</option>

        

                    @foreach($pricecategories as $category)
                <option value="{{$category->id}}"  @php if($category->id == $customer->price_categories_id){ echo "selected='selected'"; }  @endphp>{{$category->price_category_name}}</option>

                    @endforeach
                  
                  </select>
              </div>

              <div class="form-group">
                <label for="kind_attn">KIND ATTN</label>
                <input id="kind_attn" class="form-control" name="kind_attn" type="text" >
              </div>

              <div class="form-group">
                <label for="account_no">Account No</label>
                <input id="account_no" class="form-control" name="account_no" type="text" value="{{ $customer->account_no }}">
              </div>


           
         
            <input class="btn btn-primary" type="submit" value="Submit">
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
@endpush