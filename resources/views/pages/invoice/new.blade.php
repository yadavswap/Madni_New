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
      
        <form class="cmxform" id="detailsform" method="post" action="{{route('invoice.store')}}" enctype="multipart/form-data">
          <fieldset>
              @csrf

              {{-- Customer Name --}}

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="customer_id">Customer Name</label>
      
                    <select class="js-example-basic-single w-100" name="customer_id" required="">
                     
                    <option value="{{$customerdetails->id}}"  selected="selected" >{{$customerdetails->fullname}} </option>
                  
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
                                <button class="btn btn-md btn-success" type="button" id="addrow">New</button>
                                <button class="btn btn-md btn-danger" id="deleterow">Delete</button>
                              </th>
                              <th></th>
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
                              <th>Booking Date</th>
                              <th>Select Origin</th>
                              <th>Select Destination</th>
                              <th>Select Zone</th>
                              <th>Product Type</th>
                              <th>Actual Wt.( In Kg)</th>
                              <th>Volumetric Wt (In Kg)</th>
                              <th>Chargable Wt (In Kg)</th>
                              <th>Amount (INR)</th>
                            </tr>
                          </thead>
                          <tbody id="itembody">
            <tr id="itemrow" class="itemrow">

            <td>
                <input id="consignment_no" class="form-control" name="consignment_no[]" type="text" >
            </td>
           
                <td>
                    <input id="referance_no" class="form-control" name="referance_no[]" type="text" >
                </td>

                <td>
                    <input id="booking_date" class="form-control datepicker" name="booking_date[]" type="text" >
                </td>

                <td>  
                  <select class="js-example-basic-single w-100" name="origin[]" required="" id="origin">

                    <option value="" selected="selected">--Select Country -- </option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                    
                   
                  </select>
                </td>

                <td>  
                  <select class="js-example-basic-single w-100" name="destination[]" required="" id="destination">
                    <option value="" selected="selected">--Select Country -- </option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                  </select>
                </td>

                <td>  
                  <select class="js-example-basic-single w-100" name="zone[]" required="" id="zone">
                    <option value="" selected="selected">--Select Zone -- </option>
                    @foreach($zones as $zone)
                    <option value="{{$zone->zone}}">{{$zone->zone}}</option>
                    @endforeach
                  </select>
                </td>

                <td>  
                  <select class="js-example-basic-single w-100" name="product_type[]" required="" id="zone">
                    <option value="" selected="selected">--Select Type -- </option>
                   
                    <option value="0">Non Dox</option>
                    <option value="1">Doc</option>
                   
                  </select>
                </td>

                <td>  
                  <input id="actual_weight1" class="form-control" name="actual_weight[]" type="text" >
                </td>

                <td>
                  <div class="row">
                    <div class="col-md-4">          
                           
                      <input id="l1" class="form-control" name="l[]" type="text" placeholder="L" >
                    </div>
                    <div class="col-md-4">
                           
                      <input id="w1" class="form-control" name="w[]" type="text" placeholder="W" >
                    </div>
                    <div class="col-md-4">
                      
                      <input id="h1" class="form-control" name="h[]" type="text" placeholder="H" >
                    </div>
                  </div>
                </td>

                <td>
                  <input id="chargable_weight_1" class="form-control" name="chargable_weight[]" type="text" placeholder="Chargable Wt" >
                </td>

                <td>
                  <input id="amount1" class="form-control" name="amount[]" type="text" placeholder="0" >
                  
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
      // Date Picker
   $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
});
  </script>

<script>

  $("#addrow").click(function(){
    var consignment_id = $('input[id^="consignment_no"]:last');

                    var num = parseInt(consignment_id.prop("id").match(/\d+/g), 10) + 1;
                    console.log(consignment_id);

                    var itemrow = $('#itemrow').clone();
                    itemrow.find("input").val("");
                    itemrow.find(".consignment_no:last").attr("id","consignment_no"+num);
                    itemrow.find(".consignment_no:last").attr("value","");
                    itemrow.find(".refrence_no:last").attr("value","");
                    itemrow.find(".booking_date:last").attr("id","booking_date"+num);
                    itemrow.find(".origin:last").attr("id","origin"+num);
                    itemrow.find(".destination:last").attr("id","destination"+num);
                    itemrow.find(".zone:last").attr("id","zone"+num);
                    itemrow.find(".product:last").attr("id","product"+num);
                    itemrow.find(".actual_weight:last").attr("id","actual_weight"+num);
                    // itemrow.find(".volumetric_weight:last").attr("id","volumetric_weight"+num);
                    itemrow.find(".chargeable_weight:last").attr("id","chargeable_weight"+num);
                    itemrow.find(".amount:last").attr("id","amount"+num);
                    itemrow.find(".w:last").attr("id","w"+num);
                    itemrow.find(".l:last").attr("id","l"+num);
                    itemrow.find(".h:last").attr("id","h"+num);
                    itemrow.find(".amontError:last").attr("id","amontError"+num);
                    itemrow.find(".amontLoading:last").attr("id","amontLoading"+num);


                    itemrow.find(".amount:last").val("0");
                    $("#itembody").append(itemrow);
    });

</script>
@endpush