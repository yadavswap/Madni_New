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

                <form class="cmxform" id="invoiceform" method="post" action="{{route('invoice.store')}}"
                    enctype="multipart/form-data">
            <input type="hidden" name="provider_id" value="{{$tntimport['provider_id']}}">
            <input type="hidden" name="type_id" value="{{$tntimport['type_id']}}">
            <input type="hidden" name="class_id" value="{{$tntimport['class_id']}}">
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
                                <b class="text-primary">{{$tntimport['provider']}}</b>
                            </div>
                            <div class="col-md-2">
                                <label for="type">Type : </label>
                                <b class="text-primary">{{$tntimport['type']}}</b>
                            </div>
                            <div class="col-md-2">
                                <label for="class">Class : </label>
                                <b class="text-primary">{{$tntimport['class']}}</b>
                            </div>
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
                                                        <th>
                                                            
                                                                <label for="invoice_date">Select Invoice Date <small class="text-danger">*</small> </label>
                                    
                                                                <input id="invoice_date" class="form-control datepicker invoice_date"
                                                                                                    name="invoice_date" type="text" placeholder="dd/mm/yyyy">
                                    
                                                          
                                                        </th>

                                                        <th>
                                                            <label for="statecode">Enter State Code <small class="text-danger">*</small> </label>
                                    
                                                                <input id="statecode" class="form-control  statecode"
                                                                                                    name="statecode" type="text" placeholder="00">
                                    
                                                          
                                                        </th>

                                                        <th>
                                                            <button class="btn btn-md btn-success" type="button"
                                                                id="addrow"> Add New <i class="fa fa-plus"></i></button>

                                                        </th>
                                                        <th>
                                                            <button class="btn btn-md btn-danger" type="button"
                                                                id="deleterow">
                                                                Delete <i class="fa fa-trash-o"></i></button>
                                                        </th>

                                                        <th>
                                                            <button class="btn btn-warning" type="submit" id="submit"> Process Next</button>
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
                                                    </tr>

                                                    <tr>
                                                        <th>Consignment No <small class="text-danger">*</small></th>
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
                                                    </tr>
                                                </thead>
                                                <tbody id="itembody">
                                                    <tr id="itemrow" class="itemrow perfect-scrollbar-example">

                                                        <td>
                                                            <input id="consignment_no1" class="form-control consignment_no"
                                                                name="consignment_no[]" type="text" placeholder="consignment_no">
                                                        </td>

                                                        <td>
                                                            <input id="referance_no1" class="form-control referance_no"
                                                                name="referance_no[]" type="text" placeholder="referance_no">
                                                        </td>

                                                        <td>
                                                            <input id="booking_date1" class="form-control datepicker booking_date"
                                                                name="booking_date[]" type="text" placeholder="dd/mm/yyyy">
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 origin"
                                                                name="origin[]" required="" id="origin1">
                                                       

                                                                @php
                                                                if($tntimport['type_id'] == 0)
                                                                {
                                                                
                                                                  echo  '<option value="85" selected="selected" class="origin">India
                                                                </option>';
                                                                }
                                                                else{
                                                                    echo  '<option value="" selected="selected" class="origin">-- Select Country--
                                                                </option>';
                                                                }
                                                                @endphp
                                                              
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}
                                                                </option>
                                                                @endforeach


                                                            </select>
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 destination"
                                                                name="destination[]" required="" id="destination1" >
                                                                @php
                                                                if($tntimport['type_id'] == 1)
                                                                {
                                                                
                                                                  echo  '<option value="85" selected="selected" class="origin">India
                                                                </option>';
                                                                }
                                                                else{
                                                                    echo  '<option value="" selected="selected" class="origin">-- Select Country--
                                                                </option>';
                                                                }
                                                                @endphp
                                                              

                                                                
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </td>

                                                     
                                                        <td>
                                                            <select class="w-100 type"
                                                                name="product_type[]" required="" id="type1" >
                                                                <option value="" selected="selected">--Select Type --
                                                                </option>

                                                                <option value="0">Non Dox</option>
                                                                <option value="1">Doc</option>

                                                            </select>
                                                        </td>

                                                     


                                                        <td>
                                                            <input id="actual_weight1" class="form-control actual_weight"
                                                                name="actual_weight[]" type="text" placeholder="Actual Weight">
                                                        </td>

                                                        <td>
                                                            
                                                                    <input id="l1" class="form-control l" name="l[]"
                                                                        type="text" placeholder="L" >
                                                              
                                                        </td>

                                                        <td>
                                                            
                                                            <input id="w1" class="form-control w" name="w[]"
                                                                type="text" placeholder="W" >
                                                      
                                                </td>
                                                <td>
                                                            
                                                    <input id="h1" class="form-control h" name="h[]"
                                                        type="text" placeholder="H" >
                                              
                                        </td>
                                        <td>
                                            <select class="w-100 mode"
                                                name="mode[]" required="" id="mode1" >
                                                <option value="" selected="selected">--Select Type --
                                                </option>

                                                <option value="0">Normal Mode</option>
                                                <option value="1">Cargo Mode</option>

                                            </select>
                                        </td>

                                                        <td>
                                                            <input id="chargable_weight1" class="form-control chargable_weight"
                                                                name="chargable_weight[]" type="text"
                                                                placeholder="Chargable Wt" disabled="disabled" >
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 zone" name="zone[]"
                                                                required="" id="zone1" >
                                                                <option value="" selected="selected">--Select Zone --
                                                                </option>
                                                                @foreach($zones as $zone)
                                                                <option value="{{$zone->zone}}">{{$zone->zone}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>


                                                        <td>
                                                            <input id="amount1" class="form-control amount" name="amount[]"
                                                                type="text" placeholder="0" required >

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













                       
                    </br>
                    </fieldset>

                      {{-- Second Card Start --}}


        <div class="card 2" id="calculationbody">

            {{-- Card Body Start --}}
            <div class="card-body">
                <h4 class="card-title">Calculation Details 
                    <button class="btn btn-danger float-right" id="submit" type="button">Return & Recalculate</button>
                </h4>

                <h6 class="card-title text-primary">GST Details : </h6>
                {{-- Row Start --}}
                <div class="row">
                   
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cgst">CGST Amount: * <small class="text-success" id="cgsttext"></small></label>

                            <input id="cgst" class="form-control cgst"
                                                                name="cgst" type="text" placeholder="" disabled>

                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sgst">SGST Amount: * <small class="text-success" id="sgsttext"></small></label>

                            <input id="sgst" class="form-control sgst"
                                                                name="sgst" type="text" placeholder="" disabled>

                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="igst">IGST Amount: * <small class="text-success" id="igsttext"></small></label>

                            <input id="igst" class="form-control igst"
                                                                name="igst" type="text" placeholder="" disabled>

                        </div>

                    </div>


                </div>
                {{-- Row End --}}

                <h6 class="card-title text-primary" >Price Calculator</h6>
                {{-- Row Start For Price Calculator --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="gross_amount">Gross Amount: * <small class="text-success" id="grossamounttext"></small></label>

                            <input id="gross_amount" class="form-control grossamount"
                                        name="gross_amount" type="text" placeholder="" disabled>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fuel_surcharge ">Total Fuel Charge: * <small class="text-success" id="fuelsurchargetext">25%</small></label>

                            <input id="fuel_surcharge " class="form-control fuel_surcharge"
                                        name="fuel_surcharge " type="text" placeholder="" disabled>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="enhance_security_charge">Enhanced Security Charge: * <small class="text-success" id="enhancesecuritychargetext"></small></label>

                            <input id="enhance_security_charge" class="form-control enhance_security_charge"
                                        name="enhance_security_charge" type="text" placeholder="" disabled value="40">

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

                            <input id="enhance_security_charge" class="form-control enhance_security_charge"
                                        name="enhance_security_charge" type="text" placeholder=""  value="0">

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
                            <label for="war_surcharge">WAR Surcharges Charge: *

                            <input id="war_surcharge" class="form-control war_surcharge"
                                        name="war_surcharge" type="text" placeholder=""  value="0">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="warehousing_charge ">Warehouse Charge: *

                            <input id="warehousing_charge" class="form-control warehousing_charge"
                                        name="warehousing_charge" type="text" placeholder=""  value="0">

                        </div>
                    </div>
                   
                </div>

                {{-- 2nd row end --}}
                 {{-- Row End For Price Calculator --}}

            </div>
            {{-- Card Body End --}}

        </div>
        <button class="btn btn-info" type="submit" id="submitform"> Generate Invoice </button>

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

var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
var is_import = "{{$tntimport['type_id']}}";
    
    $(document).ready(function () {
      
        console.log(is_import);
        $(".amount").prop('disabled', true);
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

</script>

<script>
   
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
    $("#itembody").append(itemrow);


});


  
$("#deleterow").click(function () {
    if ($("#itembody .itemrow").length > 1) {

        $(".itemrow:last").remove();
        
    }
});

$('#resetall').click(function(){

    $('#invoiceform').trigger('reset');
    alert("All Field Reset");
   

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

        if($("#chargable_weight"+suffix).val() != "" && $("#type"+suffix).val() != "" && $("#mode"+suffix).val())
        {
            // Start Ajax Call
            $.ajax({

                url: "{{url('/getCalculateAmount')}}",
                    data: {
                        "provider_id" : "{{$tntimport['provider_id']}}",
                        "is_import": "{{$tntimport['type_id']}}",
                        "class_id": "{{$tntimport['class_id']}}",
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

                            console.log(Math.round(response[0].price));
                            $("#amount"+suffix).val(Math.round(response[0].price));
                            $("#amount"+suffix).prop('disabled', true);

                        }
                        else{
                            $("#amount"+suffix).val("");
                            $("#amount"+suffix).prop('disabled', false);
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







$("#submit").click(function (e) {



    e.preventDefault();

    if($('#invoice_date').val() == "" || $('#statecode').val() == "" || $('.amount').val() == "")
    {
        alert('Please Check Invoice Date or State Code or Final Amount !');
        return false;
    }

    $("#calculationbody").toggle();


    $('html, body').animate({
        scrollTop: $('#calculationbody').offset().top
    }, 500);

    var gross = 0;



$('.amount').each(function(index,element){
    gross = gross + parseFloat($(element).val());
   
    if(is_import == "1")
    {
        console.log("Import");
        var cgst = (total * 9) / 100;
        var sgst = (total * 9) / 100;

        $('input[name="c_gst"]').val(cgst);
        $('input[name="s_gst"]').val(sgst);

                    total = total + cgst + sgst;

        $('#cgsttext').text("9%");
         $('#sgsttext').text("9%");
    }
    if(is_import == "0")
    {
        console.log("Export");
        $('#igsttext').text("18%");
    }
    
    console.log(gross);
    $("#gross_amount").val(gross);
    var surcharge = (gross/100)*25;
    console.log(surcharge);
    $('.fuel_surcharge').val(surcharge);
});

    // $('#invoiceform').submit();

    // $('[name="consignment_no[]"]').val();

//    $('[name="consignment_no[]"]').each(function() {
//     console.log( this.value +);
// });



});



</script>


@endpush
