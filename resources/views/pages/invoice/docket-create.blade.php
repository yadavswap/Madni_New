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
            <h4 class="card-title">Create Docket Create</h4>
            <form class="cmxform" id="signupForm" method="post" action="{{route('invoice.docket.save')}}">
               <fieldset>
                  @csrf
                  <h6 class="">Customer Detils</h6> 
                  <hr/>
                  <input type='hidden' name='invoice_id' value="{{ $invoice_id }}">
                  <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Customer Refenrece No</label>
                            <input id="customer_ref_no" class="form-control" name="customer_ref_no" type="text"
                                value="{{old('customer_ref_no')}}" 
                                >
                        </div>
                    </div>
                  </div>  
                  <h6 class="">To Collection Address</h6> 
                  <hr/>
                  <div class="row to_collection_address_div">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="to_collection_address_name" class="form-control" name="to_collection_address[name]" type="text" required=""
                                value="{{old('to_collection_address.name')}}" 
                                >
                        </div>
                    </div>    
                    <div class="col-md-3">    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="to_collection_address_email" class="form-control" name="to_collection_address[email]" type="email"  required=""
                            value="{{old('to_collection_address.email')}}" 
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Telephone</label>
                            <input id="to_collection_address_telephone" class="form-control" name="to_collection_address[telephone]" type="text"  required=""
                            value="{{old('to_collection_address.telephone')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Conatct Name</label>
                            <input id="to_collection_address_contact_name" class="form-control" name="to_collection_address[contact_name]" type="text"  required=""
                            value="{{old('to_collection_address.contact_name')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="to_collection_address_address" class="form-control" name="to_collection_address[address]" type="text"  required=""
                            value="{{old('to_collection_address.address')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Country</label>
                            <input id="to_collection_address_country" class="form-control" name="to_collection_address[country]" type="text"  required=""
                            value="{{old('to_collection_address.country')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Region</label>
                            <input id="to_collection_address_region" class="form-control" name="to_collection_address[region]" type="text"  required=""
                            value="{{old('to_collection_address.region')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input id="to_collection_address_city" class="form-control" name="to_collection_address[city]" type="text"  required=""
                            value="{{old('to_collection_address.city')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Zipcode</label>
                            <input id="to_collection_address_zipcode" class="form-control" name="to_collection_address[zipcode]" type="text"  required=""
                            value="{{old('to_collection_address.zipcode')}}" 
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Same Delivery Addres</label>
                        <div class="form-check">
                            <input class="form-check-input same_delivery_address" type="checkbox" value="1" id="same_delivery_address" name="same_delivery_address" style="margin-left:auto;" @if(old('same_delivery_address') == 1) 'checked' @endif>
                            <label class="form-check-label" for="pirority">Yes Same as collection</label>
                        </div>
                    </div>
                  </div>
                  <h6 class="">Delivery Address</h6> 
                  <hr/> 
                  <div class="row delivery_address_div">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="delivery_address_name" class="form-control" name="delivery_address[name]" type="text" required=""
                                value="{{old('delivery_address.name')}}" 
                                >
                        </div>
                    </div>    
                    <div class="col-md-3">    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="delivery_address_email" class="form-control" name="delivery_address[email]" type="email"  required=""
                            value="{{old('delivery_address.email')}}" 
                            >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Telephone</label>
                            <input id="delivery_address_telephone" class="form-control" name="delivery_address[telephone]" type="text"  required=""
                            value="{{old('delivery_address.telephone')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Conatct Name</label>
                            <input id="delivery_address_contact_name" class="form-control" name="delivery_address[contact_name]" type="text"  required=""
                            value="{{old('delivery_address.contact_name')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-6">    
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="delivery_address_address" class="form-control" name="delivery_address[address]" type="text"  required=""
                            value="{{old('delivery_address.address')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Country</label>
                            <input id="delivery_address_country" class="form-control" name="delivery_address[country]" type="text"  required=""
                            value="{{old('delivery_address.country')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Region</label>
                            <input id="delivery_address_region" class="form-control" name="delivery_address[region]" type="text"  required=""
                            value="{{old('delivery_address.region')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input id="delivery_address_city" class="form-control" name="delivery_address[city]" type="text"  required=""
                            value="{{old('delivery_address.city')}}" 
                            >
                        </div>
                    </div>       
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="email">Zipcode</label>
                            <input id="delivery_address_zipcode" class="form-control" name="delivery_address[zipcode]" type="text"  required=""
                            value="{{old('delivery_address.zipcode')}}" 
                            >
                        </div>
                    </div>
                  </div>
                  <h6 class="">Instruction</h6>
                  <hr/>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Delivery Instruction</label>
                            <textarea id="delivery_instruction" class="form-control"rows="5" name="delivery_instruction">{{old('delivery_instruction')}}</textarea>
                        </div>
                    </div>
                  </div>
                  <h6 class="">Options</h6>
                  <hr/>
                  <div class="row">
                    <div class="col-md-3">
                        <label for="">Pirority</label>
                        <div class="form-check">
                            <input class="form-check-input pirority" type="checkbox" value="1" id="pirority" name="pirority" style="margin-left:auto;" @if(old('pirority') == 1) 'checked' @endif>
                            <label class="form-check-label" for="pirority">Yes Pirority</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="">Inhanced Liability</label>
                        <div class="form-check">
                            <input class="form-check-input inhanced_liability" type="checkbox" value="1" name="inhanced_liability" id="inhanced_liability" style="margin-left:auto;" @if(old('inhanced_liability') == 1) 'checked' @endif>
                            <label class="form-check-label" for="inhanced_liability">Yes Inhanced Liability</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="liability_currency">Liability Currency</label>
                            <input id="liability_currency" class="form-control" name="liability_currency" type="text" value="{{old('liability_currency')}}" readonly>
                        </div>
                        @if($errors->has('liability_currency'))
                            <div class="error text-danger">{{ $errors->first('liability_currency') }}</div>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="liability_value">Liability Value</label>
                            <input id="liability_value" class="form-control" name="liability_value" type="text" value="{{old('liability_value')}}" readonly>
                        </div>
                        @if($errors->has('liability_value'))
                            <div class="error text-danger">{{ $errors->first('liability_value') }}</div>
                        @endif
                    </div>    
                  </div>
                  <h6 class="">Dutiable Shipment Deatils</h6>
                  <hr/>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="receiver_vat">Receiver VAT/TVA/BTW/MWST No</label>
                            <input id="receiver_vat" class="form-control" name="receiver_vat" type="text"  required=""
                            value="{{old('receiver_vat')}}" 
                            >
                            @if($errors->has('receiver_vat'))
                                <div class="error text-danger">{{ $errors->first('receiver_vat') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <input id="currency" class="form-control" name="currency" type="text"  required=""
                            value="{{old('currency')}}" 
                            >
                            @if($errors->has('currency'))
                                <div class="error text-danger">{{ $errors->first('currency') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="net_amount">Value</label>
                            <input id="net_amount" class="form-control" name="net_amount" type="text"  required=""
                            value="{{old('net_amount')}}" 
                            >
                            @if($errors->has('net_amount'))
                                <div class="error text-danger">{{ $errors->first('net_amount') }}</div>
                            @endif
                        </div>
                    </div>    
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

<script>
    $(".same_delivery_address").change(function(){
        var cad = 'to_collection_address'
        var dad = 'delivery_address'
        let fields = ['name','email','telephone','contact_name','address','country','region','city','zipcode']
        if($(this).is(':checked')) {
            fields.forEach(field => {
                $('#'+dad+'_'+field).val($('#'+cad+'_'+field).val())    
            }); 
        } else {
            fields.forEach(field => {
                $('#'+dad+'_'+field).val('')    
            });
        }
    })
    $(".inhanced_liability").change(function(){
        if($(this).is(':checked')) {
            console.log('chl lib')
            $("#liability_currency").removeAttr('readonly')
            $("#liability_value").removeAttr('readonly')
            $("#liability_currency").attr('required','')
            $("#liability_value").attr('required','')
        } else {
            $("#liability_currency").attr("readonly", "readonly").val('');
            $("#liability_value").attr("readonly", "readonly").val('');
            $("#liability_currency").removeAttr('required')
            $("#liability_value").removeAttr('required')
        }
    })   
</script>
@endpush