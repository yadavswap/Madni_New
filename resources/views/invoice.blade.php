<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
   <head>
      <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <style type="text/css">
       body{
  font-family: 'Open Sans', sans-serif;
}
table.GeneratedTable {
  width: 820px;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 1px;
  border-color: #000000;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 1px;
  border-color: #000000;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #ffffff;
}
.right-div{
  text-align: right;
   float: right;
}
.left-div{
  text-align: left;
    margin-left: -20px;
    float: left;
    max-width: 295px;

}
.fake-table{
  width: 819px;
  border: 1px solid black;
  height: 475px;
}
li{
  font-size: 13px;
  font-weight: 600;
}
ul{
    list-style-type: none;
}
.right-ul > li{
  letter-spacing: 0.8px;
 margin: 2px 3px 3px 0px;
}
.tax-title{
  font-weight: bold;
  margin: 3px;
  text-align:center;
}
.amount-div{
  float: left;
  border: 1px solid black;
  height: 25px;
  width: 819px;
  font-size: 13px;
  margin-top: -8px;
  padding: 2px;
}
.signature-div{
  float: left;
  border: 1px solid black;
  height: 55px;
  width: 819px;
  font-size: 13px;
}
.amount-div > b {
  margin-left: 10px;
   margin-top: 5px;
}
.signature{
  text-align: right;
  width: 819px;
   border: 1px solid black;
   height: 40px;
}
.tnc{
  width: 819px;
  border-bottom: 1px solid black;
}
.tnc > ul{
  margin-top: 5px;
}
.todiv{
  width:819px;
  border: 1px solid black; 
  height: 145px;
  font-size: 10px;
}
.toleft{
    text-align: left;
    float: left;
    max-width: 295px;
    margin: 5px 0px 0px 20px;
}
.toaddress{
     max-width: 450px;
    overflow-wrap: break-word;
    max-height: 65px;
    font-size: 15px;
    margin-bottom: 14.5px;
}
.invoice-section{
  font-size: 14px;
  font-weight: bold;
  margin: 15px;
}
      </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


   </head>
   <div>
   
   <body>
      <div id="pdf">
     <!-- invoice body start -->
     <table class="GeneratedTable">
  <thead>
    <div style="width:819px; border: 1px solid black; height: 140px;">
      <center><img src="http://143.110.183.100/result_htm_8bf8c0bc2d3a7f46.png" style="width:819px;"></center>
      <h2 class="tax-title">TAX INVOICE</h2>
    </div>
    <div class="todiv">
      <div class="toleft">
        <b style="font-size: 16px;">To</b><br/>
        <div class="toaddress">
          {{$customer->fullname}},<br/>
          {{$customer->address}},{{$customer->state}}, {{$customer->pincode}}

        </div>
        <b style="margin-top:2px; font-size: 16px;">GST :              {{$customer->gstin}}</b> <br/>
      </div>
      <div class="right-div">
        <ul class="invoice-section">
          <li>Invoice Number : MI786922122- {{$invoice->id}}</li>
          <li>Invoice Date :   {{$invoice->invoice_date}}</li>
        </ul>
      </div>
    </div>
  </thead>
  <tbody>
    <tr>
      <th>Sr no</th>
      <th>Consignment  No</th>
      <th>Booking Dt.</th>
      <th>Origin</th>
      <th>Destination</th>
      <th>Zone</th>
      <th>Product</th>
      <th>Actual <br/>Wt.Kgs</th>
      <th>Chargable <br/>Wt.Kgs</th>
      <th>Amount <br/>
        (INR)
      </th>
    </tr>
    <!-- Blank rows start -->
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <!-- blank rows end -->
    <!-- Start loop from here -->
      @php
         $i= 1;
         @endphp
         @foreach($products as $product)
         <tr>
      <td>{{$i}}</td>
      <td>{{$product->consignment_no}}</td>
      <td>{{$product->booking_date}}</td>
      <td>{{$product->origin}}</td>
      <td>{{$product->destination}}</td>
      <td> {{$product->zone}} 
                 @if($product->provider_id == 1)
                 
                    <b> -TNT</b>
                 
                 @endif
                 @if($product->provider_id == 2)
                 
                   <b> -FEDEX</b>
                 

                 @endif</td>
      <td>@if($product->product_type)
               DOC  <b><?= ($product->class_id != NULL && $product->class_id == 1) ? "- Express" : "- Economy"; ?> </b>
               @else
               NON-DOX <b><?= ($product->class_id != NULL && $product->class_id == 1) ? "- Express" : "- Economy"; ?> </b>
               @endif</td>
      <td>{{$product->actual_weight}} KG</td>
      <td>{{roundwt($product->chargable_weight)}} KG -  [<b>{{$product->l}} L</b> X <b>{{$product->w}} W</b> X <b>{{$product->h}} H</b>]</td>
      <td>     &#8377;. {{$product->amount}}</td>
    </tr>
    @php
    $i++;
    @endphp
         @endforeach
    
    <!-- end loop here -->
    <!-- Blank rows start -->
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <!-- blank rows end -->
  </tbody>
  <!-- table footer starts -->
  <!-- table footer ends -->
</table>
<!-- fake table starts -->
<div class="fake-table">
  <!-- left table starts -->
  <div class="left-div">
    <ul>
      <li>
        Temp Global  Surcharge- Minimum Rs. 73/- ++ upto 4 Kgs Then 17/- ++per kgs onwards <br/>
        <small>(for courier mode)</small>
      </li>
      <li>
        Temp Global  Surcharge- Minimum Rs. 73/- ++ upto 4 Kgs Then 58/- ++per kgs onwards 
        <br/>
        <small>(for Canada/Maxico/USA)</small>     
      </li>
      <li>
        Temp Global  Surcharge- Minimum Rs. 75/- ++ upto 4 Kgs Then 150/- ++per kgs onwards.
        <br/>
        <small>(for Australia & New Zealand )</small>      
      </li>
    </ul>
  </div>
  <!-- left table ends -->
  <!-- right table starts -->
  <div class="right-div">
    <ul class="right-ul">
      <li>Gross Amount:  &#x20b9; {{$invoice->gross_amount}}</li>
      <li>Temp Global Surcharge: &#x20b9; {{$invoice->tgsc}}</li>
      <li>Fuel Surcharge Index: &#x20b9; {{$invoice->fuel_surcharge}}</li>
      @if($invoice->custom_clearance != 0)
         <li style="">Custom Clearance: &#x20b9; {{$invoice->custom_clearance}}</li>
      @endif
      @if($invoice->oda_charge != 0)
         <li style="">ODA Charges: &#x20b9; {{$invoice->oda_charge}}</li>
      @endif
      <li style="display:none;">Packing Charges: &#x20b9; 0</li>
      @if($invoice->ad_code_registration_charge != 0)
         <li>AD Code Registration Charges: &#x20b9; {{$invoice->ad_code_registration_charge}}</li>
      @endif
      <li style="display: none;">IFSC/DBK Registration Charges: &#x20b9; 0</li>
      @if($invoice->enhance_security_charge !=0)
      <li>Enhanced Security Surcharge: &#x20b9; {{$invoice->enhance_security_charge}}</li>
      @endif
      @if($invoice->adc_noc_charge !=0)
      <li>ADC NOC Charge: &#x20b9; {{$invoice->adc_noc_charge}}</li>
      @endif
      @if($invoice->do_charge !=0)
      <li>DO Charge: &#x20b9; {{$invoice->do_charge}}</li>
      @endif
      @if($invoice->non_conveyar_charge !=0)
      <li>NON Conveyar Charge: &#x20b9; {{$invoice->non_conveyar_charge}}</li>
      @endif
      @if($invoice->address_correction_charge !=0)
      <li>Address Correction Charge: &#x20b9; {{$invoice->address_correction_charge}}</li>
      @endif
      @if($invoice->war_surcharge !=0)
      <li>WAR Surcharges Charges: &#x20b9; {{$invoice->war_surcharge}}</li>
      @endif
      @if($invoice->air_cargo_registration_charge !=0)
      <li>Air Cargo Registration Charges: &#x20b9; {{$invoice->air_cargo_registration_charge}}</li>
      @endif
      @if($invoice->warehousing_charge != 0)
      <li>Warehouse Charges: &#x20b9; {{$invoice->warehousing_charge}}</li>
      @endif
      @if($invoice->cgst_amount != 0)
      <li>C GST (9%): &#x20b9; {{$invoice->cgst_amount}}</li>
      @endif
      @if($invoice->sgst_amount != 0)
      <li>S GST (9%): &#x20b9;  {{$invoice->sgst_amount}}</li>
      @endif
      @if($invoice->igst_amount != 0)
      <li>I GST (18%): &#x20b9; {{$invoice->igst_amount}}</li>
      @endif
      @if($invoice->freight_amount != 0)
      <li>FREIGHT AMOUNT: &#x20b9; {{$invoice->freight_amount}}</li>
      @endif
      @if($invoice->duty_payment != 0)
      <li>Duty Payment: &#x20b9; {{$invoice->duty_payment}}</li>
      @endif
      <li><b>NET AMOUNT: </b> &#x20b9; {{$invoice->net_amount}} </li>
    </ul>
  </div>
  <!-- right table ends -->
</div>
<!-- fake table ends -->
<!-- amount in words -->
<div class="amount-div">
  <b> Amount In Words :   {{ucwords($amountinword)}}</b>
</div>
<!-- amounts in words -->
<!-- signiture section -->
<div class="signature-div" style="text-align: right;">
  <b>For Madni International</b><br/>
  <p><b style="text-align:right;">
    Authorized Signatory
    </b>
  </p>
</div>
<!-- signature section ens -->
<!-- T&C -->
<div class="tnc">
  <ul>
    <li> 1 Payment of bills should be made only by an Account Payee Cheque / Demand Draft in favour of  “MADNI INTERNATIONAL”  </li>
    <li>              
      2 Any payment received after the due date may  attract late payment charges of 2% per month.
    </li>
    <li> 3 PAN No-AJFPB7353M  and Goods & Service Tax No-27AJFPB7353M1ZZ, HSN CODE-9968, STATE-27</li>
    <li>4 WE ARE NOT COMMON CARRIERS. ALL TRANSACTIONS ARE SUBJECT TO THE CONDITIONS ENDORSED ON THE REVERSE OF OUR CONSIGNMENT NOTE.</li>
    <li>5 ANY DISCREPANCIES SHOULD BE NOTIFIED WITHIN SEVEN DAYS OF RECEIPT OF THIS INVOICE </li>
    <li>6 Any kind of disputes subject to Nagpur Jurisdiction</li>
    <li>7 This is the system generated INVOICE and dose not require any signature.</li>
  </ul>
</div>
<!-- T&C ends -->
     <!-- invoice body end -->
   </body>
<footer>

  <img src="http://143.110.183.100/result_htm_1235191968a09bb9.png" style="width:819px";>

</footer>
</div>

@php

function roundwt($price){
    /*

            This COnver Values according to sheet values
            Example If Value is 1 it return 1
            If value is 1.2 it return 1.5
            If value is 1.5 it return 1.5
            If Value is 1.51 it return 2.0

            */
            $intVal = intval($price);
            $difference = $price-$intVal;
           // dd($difference);

   
                if($difference < 0.50 && $difference != 0){
                
                    $requiredval = 0.50 - $difference;
                    $price = $price + $requiredval;
                   $finalvalue = number_format($price,2);
                    // dd($finalvalue);
                    return $finalvalue;
                    
                }

                if($difference >= 0.51  && $difference != 0)
                {
                    $finalvalue = ceil($price);
                   return $finalvalue;
                }
                if($difference == 0 || $difference = 0.00)
                {
                    $finalvalue = $price;
                   return $finalvalue;
                }
   
}

@endphp

   <script type="text/javascript">

      let savedoc = new jsPDF('#pdf','pt','a4');

savedoc.addHTML(document.body,function() {
   // savedoc.save('madniinvoice.pdf');
});

      var doc = new jsPDF();

 function saveDiv(divId, title) {
 doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
 doc.save('div.pdf');
}

function printDiv(divId,
  title) {

  let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

  mywindow.document.write(`<html><head><title>${title}</title>`);
  mywindow.document.write('</head><body >');
  mywindow.document.write(document.getElementById(divId).innerHTML);
  mywindow.document.write('</body></html>');

  mywindow.document.close(); // necessary for IE >= 10
  mywindow.focus(); // necessary for IE >= 10*/

  mywindow.print();
  mywindow.close();

  return true;
}

   </script>
</html>