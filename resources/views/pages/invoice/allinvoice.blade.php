@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
    rel="stylesheet" />
    

    <link href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />    

@endpush

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session()->has('success'))
    <div class="alert alert-warning"> 
        @php
            $Rinvoice = App\CustomerInvoice::orderBy('id','DESC')->limit(1)->get();
        @endphp
      <a href="{{route('invoice.view',$Rinvoice['0']->id)}}" target="_blank"> Click Here To RECENT View Invoice </a>
    </div>
@endif
    </div>
</div>
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

                <form class="cmxform" id="invoiceform" method="post" action="{{route('invoice.store.new')}}"
                    enctype="multipart/form-data">
           
            <input type="hidden" name="type_id" value="{{$data['type_id']}}">
         
            <input type="hidden" name="price_categories_id" value="{{$customerdetails->price_categories_id}}">
                    <fieldset>
                        @csrf

                        {{-- Customer Name --}}

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="customer_id">Customer Name <small class="text-danger">*</small></label>

                                    <select class="js-example-basic-single w-100" name="customer_id" required="">

                                        <option value="{{$customerdetails->id}}" selected="selected">
                                        {{$customerdetails->fullname}} - {{$customerdetails->email}}</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="date">Date : </label>
                                <b class="text-success">{{date('d/m/Y')}}</b>
                            </div>
                            <div class="col-md-2">
                                <label for="provider">Provider : </label>
                                <b class="text-primary">NA</b>
                            </div>
                            <div class="col-md-2">
                                <label for="type">Type : </label>
                                <b class="text-primary">
                                    @if($data['type_id'])
                                    {{'Import'}}
                                    @else
                                    {{'Export'}}
                                    @endif
                                
                                
                            </b>
                            </div>
                            <div class="col-md-2">
                                <label for="class">Class : </label>
                                <b class="text-primary">NA</b>
                            </div>
                        </div>


                        {{-- Customer Name End --}}

                        {{-- Product --}}
                        <div class="row">

                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                         <button class="btn btn-danger pull-right" type="submit" id="submit"> Process Next To Invoice</button>
                                        <div class="table-responsive">
                                            <table id="dataTableExample" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            
                                                                <label for="invoice_date">Select Invoice Date <small class="text-danger">*</small> </label>
                                    
                                                                <input id="invoice_date" class="form-control datepicker invoice_date"
                                                        name="invoice_date" type="text" placeholder="dd/mm/yyyy" value="{{date('d/m/Y')}}">
                                    
                                                          
                                                        </th>

                                                        <th>
                                                            <label for="statecode">Enter State Code <small class="text-danger">*</small> </label>
                                    
                                                                <input id="statecode" class="form-control  statecode"
                                                                name="statecode" type="text" placeholder="00"
                                                                value="27" 
                                                                >
                                    
                                                          
                                                        </th>


                                                        <th>
                                                           
                                                                <button class="btn btn-md btn-info" type="button"
                                                                    id="resetall">
                                                                    Reset All <i class="fa fa-times"></i></button>
                                                           
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <!--<td></td>-->
                                                        <th>
                                                            <button class="btn btn-md btn-success" type="button"
                                                                id="addrow"> Add New <i class="fa fa-plus"></i></button>
                                                                <button class="btn btn-md btn-danger" type="button"
                                                                id="deleterow">
                                                                Delete <i class="fa fa-trash-o"></i></button>

                                                        </th>
                                                       
                                                    </tr>

                                                    <tr>
                                                        <th>Consignment No <small class="text-danger">*</small></th>
                                                          <th>Select Provider <small class="text-danger">*</small></th>
                                                         <th>Select Class <small class="text-danger">*</small></th>

                                                        <th>Referance No <small class="text-danger">*</small></th>
                                                        <th>Select Booking Date <small class="text-danger">*</small></th>
                                                        <th>Select Origin <small class="text-danger">*</small></th>
                                                        <th>Select Destination <small class="text-danger">*</small></th>
                                                        <th>Product Type <small class="text-danger">*</small></th>
                                                        <th>Actual Wt.( In Kg) <small class="text-danger">*</small></th>
                                                        <th>L(Volumetric)<small class="text-danger">*</small></th>
                                                        <th>W(Volumetric)<small class="text-danger">*</small></th>
                                                        <th>H (Volumetric)<small class="text-danger">*</small></th>
                                                        <th>Select Mode<small class="text-danger">*</small></th>
                                                        <th>Chargable Wt (In Kg) <small class="text-danger">*</small></th>
                                                        <th>Select Zone <small class="text-danger">*</small></th>
                                                        <th>Amount (INR) <small class="text-danger">*</small></th>
                                                        <th>TGSC (INR) <small class="text-danger">*</small></th>
                                                        <!--<th>Enhance Security Charge (INR) <small class="text-danger">*</small></th>-->
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="itembody">
                                                    <tr id="itemrow" class="itemrow perfect-scrollbar-example">

                                                        <td>
                                                            <input id="consignment_no1" class="form-control consignment_no"
                                                                name="product_details[consignment_no][]" type="text" placeholder="consignment_no">
                                                        </td>


                                                         <td>
                                                                <select class="w-100 type provider_id"
                                                                name="product_details[provider_id][]" required="" id="provider_id1" >
                                                                <option value="" selected="selected">--Select Provider --
                                                                </option>

                                                                {{--<option value="1">TNT</option>--}}
                                                                <option value="2">Fedex</option>

                                                            </select>
                                                         </td>
                                                          <td>
                                                               <select class="w-100 type class_id"
                                                                name="product_details[class_id][]" required="" id="class_id1" >
                                                                <option value="" selected="selected">--Select Class --
                                                                </option>

                                                                <option value="0">Economy</option>
                                                                <option value="1">Express</option>

                                                            </select>
                                                          </td>

                                                        <td>
                                                            <input id="referance_no1" class="form-control referance_no"
                                                                name="product_details[referance_no][]" type="text" placeholder="referance_no">
                                                        </td>

                                                        <td>
                                                            <input id="booking_date1" class="form-control datepicker booking_date"
                                                                name="product_details[booking_date][]" type="text" placeholder="dd/mm/yyyy">
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 origin"
                                                                name="product_details[origin][]" required="" id="origin1">
                                                       

                                                                @php
                                                                if($data['type_id'] == 0)
                                                                {
                                                                
                                                                  echo  '<option value="India" selected="selected" class="origin">India
                                                                </option>';
                                                                }
                                                                else{
                                                                    echo  '<option value="" selected="selected" class="origin">-- Select Country--
                                                                </option>';
                                                                }
                                                                @endphp
                                                              
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->name}}">{{$country->name}}
                                                                </option>
                                                                @endforeach


                                                            </select>
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 destination"
                                                                name="product_details[destination][]" required="" id="destination1" >
                                                                @php
                                                                if($data['type_id'] == 1)
                                                                {
                                                                
                                                                  echo  '<option value="India" selected="selected" class="origin">India
                                                                </option>';
                                                                }
                                                                else{
                                                                    echo  '<option value="" selected="selected" class="origin">-- Select Country--
                                                                </option>';
                                                                }
                                                                @endphp
                                                              

                                                                
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->name}}">{{$country->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </td>

                                                     
                                                        <td>
                                                            <select class="w-100 type"
                                                                name="product_details[product_type][]" required="" id="type1" >
                                                                <option value="" selected="selected">--Select Type --
                                                                </option>

                                                                <option value="0">Non Dox</option>
                                                                <option value="1">Doc</option>

                                                            </select>
                                                        </td>

                                                     


                                                        <td>
                                                            <input id="actual_weight1" class="form-control actual_weight"
                                                                name="product_details[actual_weight][]" type="text" placeholder="Actual Weight">
                                                        </td>

                                                        <td>
                                                            
                                                                    <input id="l1" class="form-control l" name="product_details[l][]"
                                                                        type="text" placeholder="L" >
                                                              
                                                        </td>

                                                        <td>
                                                            
                                                            <input id="w1" class="form-control w" name="product_details[w][]"
                                                                type="text" placeholder="W" >
                                                      
                                                </td>
                                                <td>
                                                            
                                                    <input id="h1" class="form-control h" name="product_details[h][]"
                                                        type="text" placeholder="H" >
                                              
                                        </td>
                                        <td>
                                            <select class="w-100 mode"
                                                name="product_details[mode][]" required="" id="mode1" >
                                                <option value="" selected="selected">--Select Type --
                                                </option>

                                                <option value="0">Normal Mode</option>
                                                <option value="1">Cargo Mode</option>

                                            </select>
                                        </td>

                                                        <td>
                                                            <input id="chargable_weight1" class="form-control chargable_weight"
                                                                name="product_details[chargable_weight][]" type="text"
                                                                placeholder="Chargable Wt" required />
                                                        </td>

                                                       <td>
                                                            <select class="basic-single w-100 zone" name="product_details[zone][]"
                                                                required="" id="zone1" >
                                                                <option value="" selected="selected">--Select Zone --
                                                                </option>
                                                                {{--@foreach($tntZones as $zone)
                                                                <option value="{{$zone->zone}}">{{$zone->zone}}</option>
                                                                @endforeach--}}

                                                                   @foreach($fedexZones as $zone)
                                                                <option value="{{$zone->zone}}">{{$zone->zone}}</option>
                                                                @endforeach

                                                              
                                                            </select>
                                                        </td>



                                                        <td>
                                                            <input id="amount1" class="form-control amount" name="product_details[amount][]"
                                                                type="text" placeholder="0" required  >

                                                        </td>

                                                        <td>
                                                            <input id="tgsc1" class="form-control tgsc" name="product_details[tgsc][]"
                                                                type="text" required   placeholder="73">

                                                        </td>

                                                        <!--<td>
                                                            <input id="esc1" class="form-control esc" name="product_details[esc][]"
                                                                type="text" required   placeholder="40">

                                                        </td>-->
                                                      

                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Product End --}}
                      

                    </br>
                    </fieldset>

                      {{-- Second Card Start --}}


        <div class="card 2" id="calculationbody">

            {{-- Card Body Start --}}
            <div class="card-body calculationbody2">
                <h4 class="card-title">Calculation Details 
                    <button class="btn btn-danger float-right" id="recalculate" type="button">Return & Recalculate</button>
                </h4>

                <h6 class="card-title text-primary">GST Details : </h6>
                {{-- Row Start --}}
                <div class="row">
                   
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cgst">CGST Amount: * <small class="text-success" id="cgsttext"></small></label>

                            <input id="cgst" class="form-control cgst"
                                                                name="cgst" type="text" placeholder="" >

                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sgst">SGST Amount: * <small class="text-success" id="sgsttext"></small></label>

                            <input id="sgst" class="form-control sgst"
                                                                name="sgst" type="text" placeholder="" >

                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="igst">IGST Amount: * <small class="text-success" id="igsttext"></small></label>

                            <input id="igst" class="form-control igst"
                                                                name="igst" type="text" placeholder="" >

                        </div>

                    </div>


                </div>
                {{-- Row End --}}

                <h6 class="card-title text-primary" >Price Calculator</h6>
                {{-- Row Start For Price Calculator --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="gross_amount">Gross Amount: * <small class="text-success" id="grossamounttext"></small></label>

                            <input id="gross_amount" class="form-control grossamount"
                                        name="gross_amount" type="text" placeholder="" >

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fuel_surcharge">Fuel Charge Percent: * <small class="text-success" id="fuelsurchargepercent">25%</small></label>

                            <input id="fuel_surcharge_percent" class="form-control fuel_surcharge_percent"
                                        name="fuel_surcharge_percent" type="number" placeholder="" required value="0" >

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fuel_surcharge">Total Fuel Charge:</label>

                            <input id="fuel_surcharge " class="form-control fuel_surcharge"
                                        name="fuel_surcharge" type="text" placeholder="" required value="0" >

                        </div>
                    </div>

                    <!--<div class="col-md-3">
                        <div class="form-group">
                            <label for="enhance_security_charge">Enhanced Security Charge: * <small class="text-success" id="enhancesecuritychargetext"></small></label>

                            <input id="enhance_security_charge" class="form-control enhance_security_charge"
                                        name="enhance_security_charge" type="text" placeholder="0">

                        </div>
                    </div>-->

                     <div class="col-md-3">
                        <div class="form-group">
                            <label for="tgsc_total">TGSC: * <small class="text-success" id="tgsc_total"></small></label>

                            <input id="tgsc_total" class="form-control tgsc_total"
                                        name="tgsc_total" type="text" placeholder="ENTER Amount"  required="">

                        </div>
                    </div>
                   
                </div>
                {{-- 1st row ended --}}

                {{-- 2nd row start --}}

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="custom_clearance">Custom Clearence: *

                            <input id="custom_clearance" class="form-control custom_clearance"
                                        name="custom_clearance" type="text" placeholder="" value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="oda_charge ">ODA Charge: *

                            <input id="oda_charge" class="form-control oda_charge"
                                        name="oda_charge" type="text" placeholder="" value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="adc_noc_charge">ADC NOC Charge: *

                            <input id="adc_noc_charge" class="form-control adc_noc_charge"
                                        name="adc_noc_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="do_charges">DO Charge: *

                            <input id="do_charges" class="form-control do_charges"
                                        name="do_charges" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="non_conveyar_charge">NON Conveyar Charge: *

                            <input id="non_conveyar_charge" class="form-control non_conveyar_charge"
                                        name="non_conveyar_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="address_correction_charge">Address Correction Charge: *

                            <input id="address_correction_charge" class="form-control address_correction_charge"
                                        name="address_correction_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="war_surcharge">WAR Surcharges Charges: *

                            <input id="war_surcharge" class="form-control war_surcharge"
                                        name="war_surcharge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="warehousing_charge">Warehouse Charges: *

                            <input id="warehousing_charge" class="form-control warehousing_charge"
                                        name="warehousing_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ad_code_registration_charge ">AD Code Registration Charge: *

                            <input id="ad_code_registration_charge" class="form-control ad_code_registration_charge"
                                        name="ad_code_registration_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="air_cargo_registration_charge">Air Cargo Registration Charges: *

                            <input id="air_cargo_registration_charge" class="form-control air_cargo_registration_charge"
                                        name="air_cargo_registration_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="net_amount">Final Amount: *

                            <input id="net_amount" class="form-control net_amount"
                                        name="net_amount" type="text" placeholder="" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <small class="text-primary"><a href="javascript:void(0)" id="manually">Enter Manually?</a></small>
                                            </div>
                                        </div>
                                       

                        </div>
                    </div>
                   
                </div>

                {{-- 2nd row end --}}
                 {{-- Row End For Price Calculator --}}

                 <button class="btn btn-secondary btn-lg text-center" type="button" id="calculate"> Calculate Final Price </button>

            </div>
            {{-- Card Body End --}}

        </div>
        <br/>
        
        <div class="row">
            <div class="col-md-8">
      <small><input type="checkbox" id="checkbox"/>Above Calculation is correct & Process To Generare New Invoice </small>  
      <button class="btn btn-success text-center btn-md" type="submit" id="submitform"> Generate Invoice </button>
            </div>    
    </div>
        {{-- Second Card End --}}

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
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endpush

@push('custom-scripts')
<script src="{{ asset('assets/js/form-validation.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('assets/js/inputmask.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/js/typeahead.js') }}"></script>
<script src="{{ asset('assets/js/tags-input.js') }}"></script>
<script src="{{ asset('assets/js/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/timepicker.js') }}"></script>

<script>

    //  1 TNT
    //  2 FEDEX

var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
var is_import = "{{$data['type_id']}}";
    var calculated = 0;
    var totalcount = 1;
     var provider_id = "";
    var class_id = "";
    var fetchurl = "";

    console.log("provider_id_init"+provider_id);
    console.log("provider_id_init"+class_id);

    $(document).on("change", ".provider_id", function(){
        var providersuffix = this.id.match(/\d+/)[0];
        provider_id = $("#provider_id"+providersuffix).val();
        console.log("provider_id "+provider_id);

      
    });

    $(document).on("change", ".class_id", function(){
        var classsuffix = this.id.match(/\d+/)[0];
        class_id = $("#class_id"+classsuffix).val();
        console.log("class_id "+class_id);

       
    });


    // Condition for set fetch url

 

                  
               
                   
             

    // End Condition

    $(document).ready(function () {
        $(".class_id").val("");
        $(".provider_id").val("");
         
        $('#checkbox').prop('checked', false); // Unchecks it
      
        console.log(is_import);
        $("#submitform").prop('disabled',true);
        $("#calculationbody").hide();
        var total = 0;
        $("#cgsttext").text("");
        $("#sgsttext").text("");
        $("#igsttext").text("");
       


            $('.booking_date').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            });
            $('.invoice_date').datepicker({
                format:'dd/mm/yyyy',
                autoclose: true,
            });

            $(".actual_weight").inputmask('decimal', {
    rightAlign: true
  });

        
    });
   
   
   $("#addrow").click(function(){



    var consignment_id = $('input[id^="consignment_no"]:last');
    var num = parseInt(consignment_id.prop("id").match(/\d+/g), 10) + 1;
    var itemrow = $('#itemrow').clone();
    itemrow.find("input").val("");
    itemrow.find(".consignment_no:last").attr("id","consignment_no"+num);
    itemrow.find(".consignment_no:last").attr("value","");
    itemrow.find(".referance_no:last").attr("value","");
    itemrow.find(".booking_date:last").attr("id","booking_date"+num);
    itemrow.find(".origin:last").attr("id","origin"+num);
    itemrow.find(".destination:last").attr("id","destination"+num);
    itemrow.find(".zone:last").attr("id","zone"+num);
    itemrow.find(".mode:last").attr("id","mode"+num);
    itemrow.find(".type:last").attr("id","type"+num);
    itemrow.find(".actual_weight:last").attr("id","actual_weight"+num);
    // itemrow.find(".volumetric_weight:last").attr("id","volumetric_weight"+num);
    itemrow.find(".chargable_weight:last").attr("id","chargable_weight"+num);
    itemrow.find(".amount:last").attr("id","amount"+num);
    itemrow.find(".w:last").attr("id","w"+num);
    itemrow.find(".l:last").attr("id","l"+num);
    itemrow.find(".h:last").attr("id","h"+num);
    itemrow.find(".amontError:last").attr("id","amontError"+num);
    itemrow.find(".amontLoading:last").attr("id","amontLoading"+num);
    itemrow.find(".amount:last").val("0");
    itemrow.find(".provider_id:last").attr("id","provider_id"+num);
    itemrow.find(".class_id:last").attr("id","class_id"+num);
    itemrow.find(".type_id:last").attr("id","type_id"+num);
    itemrow.find(".tgsc:last").attr("id","tgsc"+num);
    //itemrow.find(".esc:last").attr("id","esc"+num);
    itemrow.find(".deleterow:last").attr("id","deleterow"+num);
    itemrow.find(".addrow:last").attr("id","addrow"+num);
    $("#itembody").append(itemrow);
    totalcount++;
      console.log(totalcount);


});


  
$("#deleterow").click(function () {
    if ($("#itembody .itemrow").length > 1) {

        $(".itemrow:last").remove();
        totalcount = totalcount-1;
        console.log(totalcount);
        
    }
});

$('#resetall').click(function(){

    $('#invoiceform').trigger('reset');
    alert("All Field Reset");
   

});

$(document).on("focus",".actual_weight",function(){
    var suffix = this.id.match(/\d+/)[0];
    var currentid = "#"+ $(this).attr('id');
    $("#mode"+suffix).val("");
    $("#zone"+suffix).val("");
    $("#amount"+suffix).val("0");

});

$(document).on("change", ".mode", function(){
    var currentid = "#"+ $(this).attr('id');
        var suffix = this.id.match(/\d+/)[0];
        var currentvalue = $(this).val();
        var actualwtid = "#actual_weight"+suffix;
        var currentLid = "#l"+suffix;
        var currentWid = "#w"+suffix;
        var currentHid = "#h"+suffix;
        var chargablewtid = "#chargable_weight"+suffix;


        console.log(currentid);

      
        if(currentvalue != "" && $(actualwtid).val() != "")
        {
            // Courier Normal Mode Calculation
                if(currentvalue == 0 && $(currentLid).val() != "" && $(currentWid).val() != "" && $(currentHid).val() != "" )
                {
                    var total = ( parseFloat($("#l"+suffix).val()) * parseFloat($("#w"+suffix).val()) * parseFloat($("#h"+suffix).val()) ) / 5000;
                    console.log(total);
                    // var final = Math.max((total * 1000));
                    // console.log("Final Weight "+final);
                    if($(actualwtid).val() > total )
                    {
                        var total = $(actualwtid).val();
                        $(chargablewtid).val(total);
                    }
                    if(total > $(actualwtid).val())
                    {
                        $(chargablewtid).val(total);
                    }
                   


                }



                // End Courier Mode Calculation 


                // Courier Cargo Mode

                if(currentvalue == 1 && $(currentLid).val() != "" && $(currentWid).val() != "" && $(currentHid).val() != "" )
                {
                   
                    var total = ( parseFloat($("#l"+suffix).val()) * parseFloat($("#w"+suffix).val()) * parseFloat($("#h"+suffix).val()) ) / 6000;
                   var total = total.toFixed(3);

                    console.log(total);
                    // var final = Math.max((total * 1000));
                    // console.log("Final Weight "+final);

                    if(total > $(actualwtid).val())
                    {
                        $(chargablewtid).val(total);

                    }
                   if($(actualwtid).val() > total ){
                       console.log(total);
                       console.log($(actualwtid).val());
                       $(chargablewtid).val($(actualwtid).val());
                   }


                }

                // End Courier Cargo Mode
        }

        else{
            $(currentid).val("");
            alert ("Enter Actual Value First!");
        }

});




// Select Zone

$(document).on("change", ".zone", function(){
    var currentid = "#"+ $(this).attr('id');
        var suffix = this.id.match(/\d+/)[0];
        console.log($(currentid).val());
        

        // Check All Fields

        if($("#provider_id"+suffix).val() != "" && $("#class_id"+suffix).val() != "" && $("#chargable_weight"+suffix).val() != "" && $("#type"+suffix).val() != "" && $("#mode"+suffix).val())
        {
            // Start Ajax Call
            if(provider_id != "" && provider_id == 1)
    {
        fetchurl = "{{url('/getCalculateAmount')}}";
        console.log("Fetch :" + fetchurl);
    }
    if(provider_id != "" && provider_id == 2){

         fetchurl = "{{route('fedex.calculte')}}";    
         console.log("Fetch :" + fetchurl);
    }

            $.ajax({
                url: fetchurl,
                    data: {
                        "provider_id" : provider_id,
                        "is_import": "{{$data['type_id']}}",
                        "class_id": class_id,
                        "is_doc" :  $("#type"+suffix).val(),
                        "chargable_weight": $("#chargable_weight"+suffix).val(),
                        "zone": $("#zone"+suffix).val(),
                        "price_categories_id":{{$customerdetails->price_categories_id}}
                    },
                    dataType: "json",
                    method: "GET",
                    success: function(response){
                        console.log(response);

                        if(response[0] != null){

                            console.log(response[0].tgsc);
                            $("#amount"+suffix).val(response[0].price);
                            $("#tgsc"+suffix).val(response[0].tgsc);
                            $("#esc"+suffix).val(response[0].esc);
                            // $("#amount"+suffix).prop('disabled', true);
                            
                            // Calculate TGCS
                            

                            
                            // End TGSC

                        }
                        else{
                            $("#amount"+suffix).val("");
                             $("#amount"+suffix).attr("readonly", false);
                             $("#tgsc"+suffix).val("");
                             $("#tgsc"+suffix).attr("readonly", false);
                             $("#esc"+suffix).val("");
                             $("#esc"+suffix).attr("readonly", false);
                            alert("No Price Available! Please Enter Price Manually");
                        }


                    }

            })

            // End Ajax Call
        }
        else{
            alert("select all values first");
                $(currentid).val("");

        }



});

// End Select Zone


$("#recalculate").click(function(e){
    calculated = 0;
    $('#checkbox').prop('checked', false);

    e.preventDefault();
    $("#calculationbody").toggle();


    $('html, body').animate({
        scrollTop: $('#itembody').offset().top
    }, 500);

    $('.calculationbody2:input', $(this)).each(function(index) {
      this.value = "0";
    })


});




$("#submit").click(function (e) {

    e.preventDefault();

    if($('#invoice_date').val() == "" || $('#statecode').val() == "" || $('.amount').val() == "")
    {
        alert('Please Check Invoice Date or State Code or Final Amount !');
        return false;
    }

    $("#calculationbody").toggle();

      var enhancedcharge = 0;
      //$('#enhance_security_charge').val(enhancedcharge);
    


    $('html, body').animate({
        scrollTop: $('#calculationbody').offset().top
    }, 500);

    var gross = 0;

    var totaltgsc = 0;   

$(".tgsc").each( function(){
    totaltgsc += $(this).val() * 1;
    totaltgsc = parseFloat(totaltgsc);

});

console.log("TGSC "+ totaltgsc);

$(".esc").each( function(){
    enhancedcharge += $(this).val() * 1;
    enhancedcharge = parseFloat(enhancedcharge);

});

console.log("ESC : "+ enhancedcharge);

var ecsandtgsc = parseFloat(enhancedcharge) + parseFloat(totaltgsc);
console.log("total of esc and tgsc"+ecsandtgsc);



$('.amount').each(function(index,element){
    gross = gross + parseFloat($(element).val());
   
    if(is_import == "1")
    {
        console.log("Import");
        $('#cgsttext').text("9%");
         $('#sgsttext').text("9%");
    }
    if(is_import == "0")
    {
        console.log("Export");
        $('#igsttext').text("18%");
    }
    
    console.log(gross);
    //var finalgrossamt =  parseFloat(enhancedcharge) + parseFloat(totaltgsc) + parseFloat(gross);
    var finalgrossamt =  parseFloat(totaltgsc) + parseFloat(gross);
    console.log("finalgrossamt :"+finalgrossamt);
    $("#gross_amount").val(gross.toFixed(2));
    // comment fuel_charge calcuation bcz its calculate with all charge under #calculate functions
    /* var surcharge = (totaltgsc + gross)/100;
    surcharge = surcharge * 25;
    console.log(surcharge);
    $('.fuel_surcharge').val(surcharge.toFixed(2)); */

    $('.tgsc_total').val(totaltgsc.toFixed(2));
    //$('.enhance_security_charge').val(enhancedcharge.toFixed(2));


     


    
});

    // $('#invoiceform').submit();

    // $('[name="consignment_no[]"]').val();

//    $('[name="consignment_no[]"]').each(function() {
//     console.log( this.value +);
// });



// $("#tgsc_total").val(totaltgsc);


});



$('#calculate').click(function(e){

    var finalgst = 0;

    var gross_amount = parseFloat($('#gross_amount').val());
    var fuel_surcharge = parseFloat($('.fuel_surcharge').val());
    //var enhance_security_charge = parseFloat($('#enhance_security_charge').val());
    var custom_clearance = parseFloat($('.custom_clearance').val());

    var oda_charge = parseFloat($('#oda_charge').val());
    var adc_noc_charge = parseFloat($('.adc_noc_charge').val());
    var do_charge = parseFloat($('.do_charges').val());
    var non_conveyar_charge = parseFloat($('.non_conveyar_charge').val());
    var address_correction_charge = parseFloat($('.address_correction_charge').val());
    var war_surcharge = parseFloat($('.war_surcharge').val());
    var warehousing_charge = parseFloat($('.warehousing_charge').val());
    var ad_code_registration_charge = parseFloat($('.ad_code_registration_charge').val());
    var air_cargo_registration_charge = parseFloat($('.air_cargo_registration_charge').val());
    var tgscamt =  parseFloat($('.tgsc_total').val());
    var fuel_surcharge_percent =  parseFloat($('.fuel_surcharge_percent').val());


    //var totalamount = gross_amount + fuel_surcharge + enhance_security_charge + custom_clearance + oda_charge +adc_noc_charge + do_charge + non_conveyar_charge+address_correction_charge + war_surcharge + warehousing_charge + ad_code_registration_charge + air_cargo_registration_charge + tgscamt;
    //var totalamount = gross_amount + fuel_surcharge + custom_clearance + oda_charge +adc_noc_charge + do_charge + non_conveyar_charge+address_correction_charge + war_surcharge + warehousing_charge + ad_code_registration_charge + air_cargo_registration_charge + tgscamt;
    console.log('old fuel_surcharge',fuel_surcharge)
    var totalamount_without_fuel_surcharge = gross_amount + custom_clearance + oda_charge +adc_noc_charge + do_charge + non_conveyar_charge+address_correction_charge + war_surcharge + warehousing_charge + ad_code_registration_charge + air_cargo_registration_charge + tgscamt;
    console.log('totalamount_without_fuel_surcharge',totalamount_without_fuel_surcharge)
    let fuel_surcharge_new = (totalamount_without_fuel_surcharge)/100 * fuel_surcharge_percent;
    console.log('fuel_surcharge_new without fix',fuel_surcharge_new);
    $('.fuel_surcharge').val(fuel_surcharge_new.toFixed(2));

    var totalamount = totalamount_without_fuel_surcharge + fuel_surcharge_new;
    console.log('total amount',totalamount)
    if(is_import == "1")
    {
        var cgst = (totalamount * 9) / 100;
    var sgst = (totalamount * 9) / 100;
    finalgst = parseFloat(cgst) + parseFloat(sgst);
    $("#cgst").val(cgst.toFixed(2));
    $("#sgst").val(sgst.toFixed(2));
        console.log("Import GST Calculation");
      
    }
    if(is_import == "0")
    {
    var igst = (totalamount * 18) / 100;
    finalgst = parseFloat(igst);
    $("#igst").val(igst.toFixed(2));
    console.log("Export GST Calculation");
    }
    totalamount = totalamount + finalgst;
    console.log('net amount',totalamount)
    
    $('.net_amount').val(totalamount.toFixed(2));
    calculated++;
   


});

$('#checkbox').on('change', function() { 
    // From the other examples
    if (this.checked && calculated > 0) {
        $("#submitform").prop('disabled',false);
    }

    else{
        alert("Please Calculate Price First");
        $("#submitform").prop('disabled',true);
        $('#checkbox').prop('checked', false); // Unchecks it
    }
});


$('#submitform').click(function(e){
    this.submit();

   
});



</script>


@endpush
