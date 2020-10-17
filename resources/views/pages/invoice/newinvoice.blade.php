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
                    <fieldset>
                        @csrf

                        {{-- Customer Name --}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_id">Customer Name</label>

                                    <select class="js-example-basic-single w-100" name="customer_id" required="">

                                        <option value="{{$customerdetails->id}}" selected="selected">
                                            {{$customerdetails->fullname}} </option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="provider">Provider : </label>
                                <b>{{$tntimport['provider']}}</b>
                            </div>
                            <div class="col-md-2">
                                <label for="type">Type : </label>
                                <b>{{$tntimport['type']}}</b>
                            </div>
                            <div class="col-md-2">
                                <label for="class">Class : </label>
                                <b>{{$tntimport['class']}}</b>
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
                                                            <button class="btn btn-md btn-success" type="button"
                                                                id="addrow"><i class="fa fa-plus"></i> Add New</button>

                                                        </th>
                                                        <th>
                                                            <button class="btn btn-md btn-danger" type="button"
                                                                id="deleterow"><i class="fa fa-trash-o"></i>
                                                                Delete</button>
                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>

                                                        </th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>

                                                    <tr>
                                                        <th>Consignment No</th>
                                                        <th>Referance No</th>
                                                        <th>Select Booking Date</th>
                                                        <th>Select Origin</th>
                                                        <th>Select Destination</th>
                                                        <th>Select Zone</th>
                                                        <th>Product Type</th>
                                                        <th>Actual Wt.( In Kg)</th>
                                                        <th>L(Volumetric)</th>
                                                        <th>W(Volumetric)</th>
                                                        <th>H (Volumetric)</th>
                                                        <th>Select Mode</th>
                                                        <th>Chargable Wt (In Kg)</th>
                                                        <th>Amount (INR)</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="itembody">
                                                    <tr id="itemrow" class="itemrow">

                                                        <td>
                                                            <input id="consignment_no1" class="form-control consignment_no"
                                                                name="consignment_no[]" type="text">
                                                        </td>

                                                        <td>
                                                            <input id="referance_no1" class="form-control referance_no"
                                                                name="referance_no[]" type="text">
                                                        </td>

                                                        <td>
                                                            <input id="booking_date1" class="form-control datepicker booking_date"
                                                                name="booking_date[]" type="text">
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 origin"
                                                                name="origin[]" required="" id="origin1">

                                                                <option value="" selected="selected" class="origin">--Select Country --
                                                                </option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}
                                                                </option>
                                                                @endforeach


                                                            </select>
                                                        </td>

                                                        <td>
                                                            <select class="basic-single w-100 destination"
                                                                name="destination[]" required="" id="destination1" >
                                                                <option value="" selected="selected">--Select Country --
                                                                </option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
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
                                                            <select class="w-100 type"
                                                                name="product_type[]" required="" id="type1" >
                                                                <option value="" selected="selected">--Select Type --
                                                                </option>

                                                                <option value="0">Non Dox</option>
                                                                <option value="1">Doc</option>

                                                            </select>
                                                        </td>

                                                     


                                                        <td>
                                                            <input id="actual_weight1" class="form-control"
                                                                name="actual_weight[]" type="text" class="actual_weight1">
                                                        </td>

                                                        <td>
                                                            
                                                                    <input id="l1" class="form-control" name="l[]"
                                                                        type="text" placeholder="L" class="l">
                                                              
                                                        </td>

                                                        <td>
                                                            
                                                            <input id="w1" class="form-control" name="w[]"
                                                                type="text" placeholder="W" class="w">
                                                      
                                                </td>
                                                <td>
                                                            
                                                    <input id="h1" class="form-control" name="h[]"
                                                        type="text" placeholder="H" class="h">
                                              
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
                                                            <input id="chargable_weight" class="form-control"
                                                                name="chargable_weight[]" type="text"
                                                                placeholder="Chargable Wt" class="chargable_weight">
                                                        </td>

                                                        <td>
                                                            <input id="amount" class="form-control" name="amount[]"
                                                                type="text" placeholder="0" required class="amount">

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
    $(document).ready(function () {

        $('#booking_date1').datepicker({
            format: 'dd/mm/yyyy',
        });

        
    });

</script>

<script>
   
   $("#addrow").click(function(){

if($("#itembody .itemrow").length < 5){

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
}

});


  
$("#deleterow").click(function () {
    if ($("#itembody .itemrow").length > 1) {

        $(".itemrow:last").remove();
        rowNum--;
    }
});


// Cargo Or Not


$(".mode").change(function() {

    var modeval = $(this).val();
    var suffix = this.id.match(/\d+/)[0];
    actualwtid = "#actual_weight"+suffix;

    if(modeval != "" && $(actualwtid).val() != "")
        {
            if(modeval == 0)
            {
                    currentlid = "#l"+suffix;
                    currentwid = "#w"+suffix;
                    currenthid = "#h"+suffix;
                   
                    if($(currentlid).val() != "" && $(currentwid).val() != "" && $(currenthid).val() != "")
                    {
                        var total = parseFloat($(currentlid).val() * $(currentwid).val() * $(currenthid).val()) / 5000;
                        console.log(total);

                        if(parseFloat(total) > parseFloat($(actualwtid).val()))
                        {
                            $(actualwtid).val(total);
                        
                        }

                        if(parseFloat(total) < parseFloat($(actualwtid).val()))
                        {
                            $(actualwtid).val($(actualwtid).val());
                        }
                    }
                    else{
                        alert("NOT OK");
                    }
            }
        }
    else{
        alert("Enter All Values");
    }    
            
});


// End Cargo Or Not


$("#submit").click(function () {
    $('#invoiceform').submit();
});



</script>


@endpush
