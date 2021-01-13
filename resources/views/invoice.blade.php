<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
   <head>
      <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <style type="text/css">
         body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:14px; }
         a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
         a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
         comment { display:none;  } 
         .page-break {
    page-break-after: always;
}
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>


   </head>
   <div>
   
   <body>
      <div id="pdf">
      <table align="left" cellspacing="0" border="0">
         <colgroup width="34"></colgroup>
         <colgroup width="106"></colgroup>
         <colgroup width="74"></colgroup>
         <colgroup width="62"></colgroup>
         <colgroup width="70"></colgroup>
         <colgroup width="47"></colgroup>
         <colgroup width="89"></colgroup>
         <colgroup width="66"></colgroup>
         <colgroup width="80"></colgroup>
         <colgroup width="104"></colgroup>
         <tr>
            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=10 rowspan=5 height="110" align="center" valign=bottom><font face="Arial Black" size=4><br><img src="{{url('result_htm_8bf8c0bc2d3a7f46.png')}}" width=715 height=88 hspace=12 vspace=13>
               </font>
            </td>
         </tr>
         <tr>
         </tr>
         <tr>
         </tr>
         <tr>
         </tr>
         <tr>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=10 height="20" align="right" valign=bottom><font face="Arial" size=1><br></font></td>
         </tr>
         <tr>
            <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=10 height="31" align="center" valign=bottom><b><font face="Tahoma" size=5>TAX INVOICE</font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1>TO,</font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="right" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td style="border-right: 2px solid #000000" align="center" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1>
               {{$customer->fullname}},
            </font></b></td>
            <td align="left" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td style="border-right: 2px solid #000000" colspan=4 align="left" valign=bottom><b><font face="Tahoma" size=1>                     Invoice No. : 
               MDN - {{$invoice->id}}
            </font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1>
               <b>Address : </b> {{$customer->address}}
            </font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-right: 2px solid #000000" colspan=4 align="left" valign=bottom><b><font face="Tahoma" size=1>                     Invoice Date : 
               {{$invoice->invoice_date}}
            </font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1>{{$customer->state}}, {{$customer->pincode}}</font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-right: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
         </tr>
     
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><b>Phone : </b>{{$customer->mobile}}</font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial"><br></font></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-right: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><b>Kind Attn- </b>
               {{$customer->kind_attn}}
            </font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><u><font color="#0563C1"><br></font></u></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-right: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Arial" size=1>
               <b>GST NO- </b>
             {{$customer->gstin}}
            </font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font size=1 color="#000000"><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-right: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="21" align="left" valign=bottom><b><font face="Arial" size=1><br></font></b></td>
            <td align="left" valign=bottom><font face="Arial" size=1>
               <b>STATE CODE :</b>
                {{$invoice->state_code}}
            </font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br>
            <b style="font-size: 11px;">Invoice Type:  </b> </font> </td>

            <td align="left" valign=bottom><font face="Arial" size=1>
               @if($invoice->is_import)
              IMPORT
               @endif
               @if(!$invoice->is_import)
          EXPORT
               @endif
            </font></td>
           
           
           
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Arial" size=1><br></font></td>
            <td align="right" valign=bottom><font face="Arial" size=1><br></font></td>
            <td style="border-right: 2px solid #000000" align="left" valign=bottom><font face="Arial" size=1><br></font></td>
         </tr>
         <tr>
            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="42" align="center" valign=middle><b><font face="Tahoma" size=1>Sr. No.</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Consignment  No</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Booking Dt.<img src="" width=8 height=23 hspace=33 vspace=9>
               </font></b>
            </td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Origin</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Destination</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Zone (s)</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Product (s)</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Actual Weight </br>Kg(s)</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Chargable Weight </br>Kg(s)</font></b></td>
            <td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" align="center" valign=middle><b><font face="Tahoma" size=1>Amount                      Rs.</font></b></td>
         </tr>
         <!-- HEre is product -->
         @php
         $i= 1;
         @endphp
         @foreach($products as $product)
           <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="center" valign=middle sdval="1" sdnum="1033;"><font face="Tahoma" size=1>{{$i}}</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="650902211" sdnum="1033;0;0"><font face="Tahoma" size=1>
               {{$product->consignment_no}}
               <img src="result_htm_f6dcee4dfa07852d.png" width=8 height=1 hspace=49 vspace=9>
               </font>
            </td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="44117" sdnum="1033;1033;M/D/YYYY"><font face="Tahoma" size=1 color="#000000">
                 {{$product->booking_date}}
            </font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Tahoma" size=1 color="#000000">{{$product->origin}}*</font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Tahoma" size=1>
               {{$product->destination}}
            </font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" sdnum="1033;"><font face="Tahoma" size=1>
                 {{$product->zone}} 
                 @if($product->provider_id == 1)
                 
                    <b> -TNT</b>
                 
                 @endif
                 @if($product->provider_id == 2)
                 
                   <b> -FEDEX</b>
                 

                 @endif
            </font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Tahoma" size=1>
               @if($product->product_type)
               DOC  <b><?= ($product->class_id != NULL && $product->class_id == 1) ? "- Express" : "- Economy"; ?> </b>
               @else
               NON-DOX <b><?= ($product->class_id != NULL && $product->class_id == 1) ? "- Express" : "- Economy"; ?> </b>
               @endif
            </font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="5.5" sdnum="1033;0;0.000"><font face="Tahoma" size=1 color="#000000">
                 {{$product->actual_weight}} KG
            </font></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="6" sdnum="1033;0;0.000"><font face="Tahoma" size=1>
                {{roundwt($product->chargable_weight)}} KG -  [<b>{{$product->l}} L</b> X <b>{{$product->w}} W</b> X <b>{{$product->h}} H</b>]
            </font></td>
            <center><td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="4488" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
               Rs. {{$product->amount}}
            </font></td>
         </center>
         </tr>
         @php
         $i++;
         @endphp
         @endforeach
       
             <!-- HEre is product -->
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Tahoma" size=1 color="#000000"><br><img src="result_htm_f6dcee4dfa07852d.png" width=8 height=14 hspace=49 vspace=3>
               </font>
            </td>
            <td rowspan=2 align="left" valign=bottom><font face="Tahoma" size=1><br><img src="result_htm_f6dcee4dfa07852d.png" width=8 height=23 hspace=33 vspace=9>
               </font>
            </td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>Gross Amount:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="4488" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
               Rs. {{$invoice->gross_amount}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom bgcolor="#FFFFFF"><font face="Tahoma" size=1 color="#000000"><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>Temp Global Surcharge: </font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Tahoma" size=1>Rs.{{$invoice->tgsc}}</font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>Fuel Surcharge Index:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
               Rs. {{$invoice->fuel_surcharge}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>Custom Clearance:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="2000" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                 Rs. {{$invoice->custom_clearance}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>ODA Charges:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                Rs. {{$invoice->oda_charge}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>AD Code Registration:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="2250" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
               {{$invoice->ad_code_registration_charge}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>DBK/ IFSC Charges:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="1250" sdnum="1033;0;0.00"><font face="Tahoma" size=1>0</font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>C GST (9%):</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
               Rs. {{$invoice->cgst_amount}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>S GST (9%):</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                  Rs. {{$invoice->sgst_amount}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>I GST (18%):</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="1797.84" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                  Rs. {{$invoice->igst_amount}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>FREIGHT AMOUNT:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="11785.84" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                Rs. {{$invoice->freight_amount}}
            </font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1>Security Enhance Charge:</font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="11785.84" sdnum="1033;0;0.00"><font face="Tahoma" size=1>
                Rs. {{$invoice->enhance_security_charge}}
            </font></td>
         </tr>
         <tr>
            <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" height="21" align="left" valign=bottom><b><font face="Tahoma" size=1>In Words:</font></b></td>
            <td style="border-bottom: 2px solid #000000; width:210px;" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font>
                   {{ucwords($amountinword)}}
            </b></td>
            <td></td>
            <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td style="border-bottom: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="center" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><b><font face="Tahoma" size=1>NET AMOUNT:</font></b></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdval="11785.84" sdnum="1033;0;0.00"><b><font face="Tahoma" size=1>
               Rs. {{$invoice->net_amount}}
            </font></b></td>
         </tr>
         <tr>
            <td style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td style="border-top: 2px solid #000000" align="left" valign=bottom><b><font face="Tahoma" size=1>For Madni International</font></b></td>
            <td style="border-top: 2px solid #000000; border-right: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;0.00"><font face="Tahoma" size=1><br></font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1><br></font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;0.00"><font face="Tahoma" size=1><br></font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1><br></font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom sdnum="1033;0;0.000"><b><font face="Tahoma" size=1>   Authorized Signatory</font></b></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;0.00"><font face="Tahoma" size=1><br></font></td>
         </tr>
         <tr>
            <td style="border-left: 2px solid #000000" height="20" align="left" valign=bottom><b><font face="Tahoma" size=1>Terms &amp; Conditions :</font></b></td>
            <td align="right" valign=bottom sdnum="1033;0;MM/DD/YYYY"><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="left" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="center" valign=bottom><font face="Tahoma" size=1><br></font></td>
            <td align="right" valign=bottom sdnum="1033;0;0.000"><font face="Tahoma" size=1><br></font></td>
            <td style="border-right: 2px solid #000000" align="right" valign=bottom sdnum="1033;0;0.00"><font face="Tahoma" size=1><br></font></td>
         </tr>
        
         <tr>
            <td colspan=10 rowspan=3 height="60" align="left" valign=bottom><font face="Tahoma" size=1><br><img src="{{url('result_htm_1235191968a09bb9.png')}}" width=718 height=56 hspace=11 vspace=3>
               </font>
            </td>
         </tr>
         <tr>
         </tr>
         <tr>
         </tr>
      </table>
    
      <br clear=left>
      <!-- ************************************************************************** -->
   </body>
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