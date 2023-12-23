<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Docket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.11.0/JsBarcode.all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <style>
        @page {
            margin: 0px !important; /* Adjust the margin as needed */
        }
        .invoice form{
            display: flex;
            margin: 50px auto;
            width: 1000px;
            box-shadow: 0px 0px 10px #00000030;
            padding: 10px;
        }
        .invoice .box{
            /* width: 50%; */
            padding: 15px;
        }
        .invoice .box .mandatory{
            font-size: 11.5px;
            font-family: poppins;
            font-weight: 700;
            color: #333;
        }
        .invoice .box .section{
            display: flex;
            align-items: center;
        }
        .invoice .box .section .boxs{
            width: 50%;
        }
        .invoice .box .section .boxs p{
            color: #f27c76;
            font-size: 13px;
            font-family: poppins;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin: 0;
        }
        .invoice .box .section .boxs input{
            width: 20px;
            height: 17px;
            margin: 0 -3px;
            padding: 0;
            border-radius: 0;
            border: 1px solid #e4a57b;
            padding: 3px;
            text-align: center;
        }
        .invoice .box .section .boxs input:focus,
        .invoice .box .section_box .input_box input:focus{
            outline: 0;
            border-radius: 0;
        }
        .invoice .box .section .boxs h4{
            background-color: #f27c76;
            color: #000;
            font-size: 11px;
            font-family: poppins;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .invoice .box .section .boxs .flexbox{
            display: flex;
            align-items: center;
        }
        .invoice .box .section .boxs .flexbox p{
            color: #000;
            font-weight: 400;
            font-family: roboto;
            font-size: 12px;
        }
        .invoice .box .section .boxs .flexbox input{
            width: 15px;
            height: 14px;
            margin: 0 5px;
        }
        .invoice .box .section_box h5{
            color: #f27c76;
            font-size: 13px;
            font-family: poppins;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin: 15px 0 0;
        }
        .invoice .box .section_box .input_box{
            display: flex;
            margin-top: 5px;
        }
        .invoice .box .section_box .input_box input{
            /* width: 20px; */
            width: 4.5%;
            height: 15px;
            margin: 0 -2px;
            padding: 0;
            border-radius: 0;
            border: 1px solid #e4a57b;
            padding: 1px;
            text-align: center;
        }
        .invoice .box .section_box .flex_box{
            margin: 8px 0;
        }
        .invoice .box .section_box .flex_box .l_box,
        .invoice .box .section_box .flex_box .r_box{
            display: flex;
            align-items: center;
        }
        .invoice .box .section_box .flex_box label{
            font-size: 11px;
            font-weight: 600;
            font-family: roboto;
            color: #333;
        }
        .invoice .box .section_box .flex_box input,
        .invoice .box .section_box .flex_box textarea{
            border: 0;
            border-bottom: 1px solid #e4a57b;
            margin: 1.5px 3px;
            padding: 0px 1px;
            font-size: 11px;
            font-weight: 600;
            font-family: roboto;
            color: #555555;
        }
        .invoice .box .section_box .flex_box input:focus,
        .invoice .box .section_box .flex_box textarea:focus{
            outline: 0;
        }
        .invoice .box .section_box .flex_box textarea{
            width: 100%;
        }
        .invoice .box .section_box section .flex_box input,
        .invoice .box .section_box section .flex_box textarea{
            background-color: #f0f0f0;
        }
        .invoice .box .section_box section .box p{
            color: #333;
            font-weight: 500;
            font-family: roboto;
            font-size: 10px;
            margin: 0;
        }
        .invoice .box .section_box section .box p.heading{
            font-weight: 600;
            font-size: 11.5px;
        }
        .invoice .box .section_box section .box .sec_box{
            align-items: center;
        }
        .invoice .box .section_box section .box .sec_box p{
            font-size: 12px;
            font-weight: 700;
            font-family: roboto;
            color: #333;
        }
        .invoice .box .section_box section .box .sec_box input{
            width: 17px;
            height: 17px;
            border: 2px solid #935F3C;
        }
        .invoice .box .section_box .sig_box{
            text-align: center;
        }
        .invoice .box .section_box .sig_box p{
            font-size: 10px;
            font-family: roboto;
            color: #333;
            font-weight: 800;
            margin: 3px 0;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxx{
            text-align: left;
            width: 50%;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxx p{
            font-weight: 600;
            font-size: 11.5px;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxx input{
            width: 92%;
            border: 0;
            border-bottom: 1px solid #333;
            margin: 0 3px 0;
            padding: 5px;
            font-size: 11px;
            font-weight: 600;
            font-family: roboto;
            color: #555555;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxright input{
            border: 0;
            background-color: #e6e6e6;
            width: 100%;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxx input:focus{
            outline: 0;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxxs{
            width: 50%;
            align-items: center;
            display: flex;
            margin-top: 7px;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxxs p{
            font-size: 10.5px;
            font-size: roboto;
            color: #333;
            font-weight: 700;
            margin: auto 3px;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxxs input{
            width: 16px; 
            height: 15px;
            margin: 0 -1px;
            padding: 0;
            border-radius: 0;
            border: 1px solid #935F3C;
            padding: 1px;
            text-align: center;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxxs input:focus{
            outline: 0;
        }
        .invoice .box .section_box .sig_box .section_boxs .boxsinput input{
            background-color: #f0f0f0;
            width: 15px;
            border-color: #9b9b9b;
        }

        /* ============Right Side============ */
        .invoice .box section .boxs{
            width: 50%;
        }
        .invoice .box section .boxs h4{
            font-size: 11.5px;
            color: #333;
            font-family: roboto;
            font-weight: 600;
            margin: 0;
        }
        .invoice .box section .boxs .logo .logo{
            /* font-size: 20px; */
            width: 65px;
            color: #333;
            font-family: roboto;
            font-weight: 600;
            margin: 0;
        }
        .invoice .box section .boxs .logo .website{
            font-size: 10.5px;
            color: #333;
            font-family: roboto;
            font-weight: 600;
            margin: 0;
        }
        .invoice .box .barcode{
            text-align: center;
            margin-top: 10px;
            border: 1px solid #935F3C;
            border-radius: 5px;
        }
        .invoice .box .barcode svg{
        height: auto;
        width: 150px;
        padding: 10px 0px 5px;
        margin: 0 auto;
        }
        .invoice .box .barcode p{
            font-size: 11px;
            font-weight: 500;
            font-family: roboto;
            color: #333;
            margin: 0 auto;
        }
        .invoice .box .section .boxs p span{
            font-size: 10px;
        }
        .invoice .box .section .boxs .select_box{
            display: flex;
            margin-bottom: 5px;
        }
        .invoice .box .section .boxs .select_box .boxs1{
            width: 10%;
        }
        .invoice .box .section .boxs .select_box .boxs2{
            width: 50%;
        }
        .invoice .box .section .boxs .select_box .boxs3,
        .invoice .box .section .boxs .select_box .boxs4{
            width: 20%;
        }
        .invoice .box .section .boxs .select_box .boxs{
            text-align: center;
        }
        .invoice .box .section .boxs .select_box .boxs .doc{
            font-size: 8.5px;
            color: #333;
            font-weight: 600;
            letter-spacing: 0;
            margin: 0 -5px;
        }
        .invoice .box .section .boxs .select_box .boxs i{
            font-size: 14px;
            color: #935F3C;
        }
        .invoice .box .section .boxs .select_box .boxs2{
            text-align: right;
        }
        .invoice .box .section .boxs .select_box .boxs p{
            font-size: 12px;
            color: #333;
            letter-spacing: 0;
            font-weight: 700;
        }
        .invoice .box .section .boxs .select_box .boxs input{
            border-radius: 0;
            background-color: #935F3C;
            width: 15px;
            border: 1px solid #333;
        }
        .invoice .box .section .boxs .select_box .boxs input:focus{
            outline: 0;
        }
        .invoice .box .section .boxs .flexbox p,
        .invoice .box .section .boxs .select_box .boxs .quote{
            font-size: 9px;
            font-weight: 500;
            line-height: 1.2em;
            padding-right: 5px;
        }
        .invoice .box .section .boxs .section_priority{
            background-color: #f0f0f0;
            margin-top: 2px;
            padding: 15px 7px;
            margin-left: 5px;
        }
        .invoice .box .section .boxs .section_priority section{
            display: flex;
            align-items: center;
        }
        .invoice .box .section .boxs .section_priority section h5{
            font-size: 16px;
            margin: 0;
            padding: 0;
            font-family: roboto;
            color: #333;
            font-weight: 600;
        }
        .invoice .box .section .boxs .section_priority section  p{
            color: #333;
            font-size: 9px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1.2em;
        }
        .invoice .box .section .boxs .section_priority section .boxsx{
            width: 50%;
            text-align: left;
            margin-top: 5px;
        }
        .invoice .box .section .boxs .section_priority section .boxsx input,
        .invoice .box .section .boxs .section_priority section input{
            width: 95%;
            background-color: #fff;
            border: 1px solid #6f6f6f;
            font-size: 12px;
            padding: 2px 3px;
            font-size: 11px;
            font-family: roboto;
            text-align: left;
        }
        .invoice .box .section .boxs .section_priority section input{
            margin-top: 7px;
            width: 100%;
            text-align: center;
        }
        .invoice .box .section .boxs .section_priority section .boxsx p{
            padding-left: 5px;
            font-size: 8.5px;
            color: #333;
            font-weight: 600;
            letter-spacing: 0;
        }
        .invoice .box .section .inp_box input{
            width: 100%;
            background-color: #f0f0f0;
            border: 0;
            margin: 1px auto;
            text-align: left;
        }
        .invoice .box .section table tr{
            border-bottom: 1px solid #6f6f6f;
        }
        .invoice .box .section table tr th,
        .invoice .box .section table tr td{
            border-left: 1px solid #6f6f6f;
            border-bottom: 1px solid #6f6f6f;
            margin: 0;
            text-align: center;
            padding: 3px 5px;
        } 
        .invoice .box .section table tr .borleft{
            border-left: 0;
            text-align: left;
        }
        .invoice .box .section table tr th h5{
            font-size: 13px;
            color: #333;
            font-family: poppins;
            font-weight: 700;
            margin: 0;
        }
        .invoice .box .section table tr th p{
            font-weight: 600 !important;
            font-family: roboto !important;
            color: #333 !important;
            font-size: 11px !important;
            font-size: 10px !important;
            margin: 0 !important;
        }
        .invoice .box .section table tr td p{
            font-weight: 600 !important;
            font-family: roboto !important;
            color: #333 !important;
            font-size: 11px !important;
            font-size: 10px !important;
            margin: 0 !important;
        }
        .invoice .box .section table tr td.borleft p{
            font-size: 12px !important;
        }
        .invoice .box .section .ptext{
            font-weight: 600 !important;
            font-family: roboto !important;
            color: #333 !important;
            font-size: 11px !important;
            font-size: 10px !important;
            margin: 0 !important;
        }
        .invoice .box .section section .boxs input{
            width: 17.4px;
            height: 16px;
            margin: 0 -3px;
            border-radius: 0;
            border: 1px solid #333;
            padding: 1px;
            text-align: center;
            font-size: 12px;
            font-family: poppins;
        }
        .invoice .box .section section .boxs .flex_box{
            display: flex;
            margin-top: 5px;
        }
        .invoice .box .section section .boxs .flex_box .box{
            border: 0;
            margin: 0;
            padding: 0;
        }
        .invoice .box .section section .boxs .flex_box .box input{
            border: 1px solid #333;
            width: 90%;
            padding: 3px;
            font-size: 12px;
            font-family: poppins;
        }
        .invoice .box .section section .boxscolor{
            background-color: #f27c76;
            text-align: center;
            align-items: center;
            padding: 5px;
        }
        .invoice .box .section section .boxscolor p{
            color: aliceblue;
            font-size: 10px;
            font-family: poppins;
            font-weight: 500;
            margin-bottom: 0;
        }
        .invoice .box .section section .boxscolor p.copy{
            font-size: 13px;
        }
        .button{
            margin: 20px auto;
            text-align: center;
        }
        .button button{
            background-color: #2f5ebb;
            color: aliceblue;
            padding: 7px 25px;
            border: 0;
            letter-spacing: 0.5px;
            cursor: pointer;
        }
    </style>
    <div class="invoice" id="pdfinvoice">
        <form action="">
            <div class="box" style="width: 47%;">
                <h4 class="mandatory">WHITE SECTIONS ARE MANDATORY, PLEASE COMPLETE IN CAPITALS AND PRESS HARD</h4>
                <div class="section">
                    <div class="boxs">
                        <p>1. Sender's Account Number</p>
                    </div>
                    <div class="boxs">
                        @php  $account_no = !empty($invoice['customer']) ? $invoice['customer']['account_no'] : '';  @endphp
                        @for($i=0;$i<9;$i++)
                            <input type="text" name="ac{{$i}}" required maxlength="1" value="{{ $account_no[$i] ?? '' }}">
                        @endfor
                        <!--<input type="text" name="ac1" required maxlength="1">
                        <input type="text" name="ac2" required maxlength="1">
                        <input type="text" name="ac3" required maxlength="1">
                        <input type="text" name="ac4" required maxlength="1">
                        <input type="text" name="ac5" required maxlength="1">
                        <input type="text" name="ac6" required maxlength="1">
                        <input type="text" name="ac7" required maxlength="1">
                        <input type="text" name="ac8" required maxlength="1">
                        <input type="text" name="ac9" required maxlength="1">-->
                    </div>
                </div>
                <!--<div class="section">
                    <div class="boxs">
                        <p>2. Invoice to Reciver</p>
                    </div>
                    <div class="boxs" style="text-align: center;">
                        <h4>SENDER LIABLE FOR UNPAID CHARGES</h4>
                    </div>
                </div>-->
                <!--<div class="section">
                    <div class="boxs">
                        <div class="flexbox">
                            <p class="flex_p">Cross Box</p>
                            <input type="text" name="" id="">
                            <p>and provide receiver's account number or call Customer Service for correct account details</p>
                        </div>
                    </div>
                    <div class="boxs">
                        <input type="text" name="ac1" required maxlength="1">
                        <input type="text" name="ac2" required maxlength="1">
                        <input type="text" name="ac3" required maxlength="1">
                        <input type="text" name="ac4" required maxlength="1">
                        <input type="text" name="ac5" required maxlength="1">
                        <input type="text" name="ac6" required maxlength="1">
                        <input type="text" name="ac7" required maxlength="1">
                        <input type="text" name="ac8" required maxlength="1">
                        <input type="text" name="ac9" required maxlength="1">
                    </div>
                </div>-->
                <div class="section_box">
                    <h5>3. Customer Reference(Information you would like on the invoice (if required))</h5>
                    <div class="input_box">
                        @php  $customer_ref_no = $docket['customer_ref_no'];  @endphp
                        @for($i=0;$i<27;$i++)
                            <input type="text" name="ac{{$i}}" required maxlength="1" value="{{ $customer_ref_no[$i] ?? '' }}">
                        @endfor
                        <!--<input type="text" name="ac1" required maxlength="1">
                        <input type="text" name="ac2" required maxlength="1">
                        <input type="text" name="ac3" required maxlength="1">
                        <input type="text" name="ac4" required maxlength="1">
                        <input type="text" name="ac5" required maxlength="1">
                        <input type="text" name="ac6" required maxlength="1">
                        <input type="text" name="ac7" required maxlength="1">
                        <input type="text" name="ac8" required maxlength="1">
                        <input type="text" name="ac9" required maxlength="1">
                        <input type="text" name="ac1" required maxlength="1">
                        <input type="text" name="ac2" required maxlength="1">
                        <input type="text" name="ac3" required maxlength="1">
                        <input type="text" name="ac4" required maxlength="1">
                        <input type="text" name="ac5" required maxlength="1">
                        <input type="text" name="ac6" required maxlength="1">
                        <input type="text" name="ac7" required maxlength="1">
                        <input type="text" name="ac8" required maxlength="1">
                        <input type="text" name="ac9" required maxlength="1">
                        <input type="text" name="ac4" required maxlength="1">
                        <input type="text" name="ac5" required maxlength="1">
                        <input type="text" name="ac6" required maxlength="1">
                        <input type="text" name="ac7" required maxlength="1">
                        <input type="text" name="ac8" required maxlength="1">
                        <input type="text" name="ac9" required maxlength="1">-->
                    </div>
                </div>

                <div class="section_box">
                    <h5 style="margin-bottom: 7px;">4. From(Collection Address)</h5>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 55%;">
                            <label for="">Company Name:</label>
                            <input type="text" name="cname" id="" required style="width: 100%;" value="{{ $invoice['customer']['fullname'] }}">
                        </div>
                        <div class="r_box" style="45%">
                            <label for="">Email:</label>
                            <input type="email" name="email" id="" required value="{{ $invoice['customer']['email'] }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <label for="">Address:</label>
                        <textarea name="address">{{ $invoice['customer']['address'] }}</textarea>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 60%;">
                            <label for="">City:</label>
                            <input type="text" name="cname" id="" required style="width: 85%;" value="{{ $invoice['customer']['city'] }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Zip Code:</label>
                            <input type="text" name="email" id="" required value="{{ $invoice['customer']['pincode'] }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 62%;">
                            <label for="">Province/Region:</label>
                            <input type="text" name="cname" id="" required style="width: 62%;" value="{{ $invoice['customer']['state'] }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Country:</label>
                            <input type="text" name="country" id="" required value="{{ $invoice['customer']['country_id'] }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 62%;">
                            <label for="">Contact Name:</label>
                            <input type="text" name="con_name" id="" required style="width: 62%;" value="{{ $invoice['customer']['contact_name'] }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Tel No:</label>
                            <input type="number" name="telephone" id="" required value="{{ $invoice['customer']['mobile'] }}">
                        </div>
                    </div>                    
                </div>

                <div class="section_box">
                    <h5 style="margin-bottom: 7px;">5. To (Receiver)</h5>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 55%;">
                            <label for="">Company Name:</label>
                            <input type="text" name="cname" id="" required style="width: 70%;" value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['name'] : '' }}">
                        </div>
                        <div class="r_box" style="45%">
                            <label for="">Email:</label>
                            <input type="email" name="email" id="" required value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['email'] : '' }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <label for="">Address:</label>
                        <textarea name="address">{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['address'] : '' }}</textarea>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 60%;">
                            <label for="">City:</label>
                            <input type="text" name="cname" id="" required style="width: 85%;" value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['city'] : '' }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Zip Code:</label>
                            <input type="text" name="email" id="" required value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['zipcode'] : '' }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 62%;">
                            <label for="">Province/Region:</label>
                            <input type="text" name="cname" id="" required style="width: 62%;" value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['region'] : '' }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Country:</label>
                            <input type="text" name="country" id="" required value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['country'] : '' }}">
                        </div>
                    </div>
                    <div class="flex_box" style="display: flex;">
                        <div class="l_box" style="width: 62%;">
                            <label for="">Contact Name:</label>
                            <input type="text" name="con_name" id="" required style="width: 62%;" value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['name'] : '' }}">
                        </div>
                        <div class="r_box" style="35%">
                            <label for="" style="width: 100%;">Tel No:</label>
                            <input type="number" name="telephone" id="" required value="{{ !empty($docket['to_collection_address']) ? $docket['to_collection_address']['telephone'] : '' }}">
                        </div>
                    </div>
                </div>

                <div class="section_box">
                    <h5 style="margin-bottom: 7px;">6. Delivery Address(If different from receiver's address above)</h5>
                    <section style="background-color: #f0f0f0; padding: 3px 5px; border-radius: 5px; margin: 0 -10px;">
                        <div class="flex_box" style="display: flex;">
                            <div class="l_box" style="width: 55%;">
                                <label for="">Company Name:</label>
                                <input type="text" name="cname" id="" required style="width: 70%;" value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['name'] : '' }}">
                            </div>
                            <div class="r_box" style="45%">
                                <label for="">Email:</label>
                                <input type="email" name="email" id="" required value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['email'] : '' }}">
                            </div>
                        </div>
                        <div class="flex_box" style="display: flex;">
                            <label for="">Address:</label>
                            <textarea name="address">{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['address'] : '' }}</textarea>
                        </div>
                        <div class="flex_box" style="display: flex;">
                            <div class="l_box" style="width: 60%;">
                                <label for="">City:</label>
                                <input type="text" name="cname" id="" required style="width: 85%;" value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['city'] : '' }}">
                            </div>
                            <div class="r_box" style="35%">
                                <label for="" style="width: 100%;">Zip Code:</label>
                                <input type="text" name="email" id="" required value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['zipcode'] : '' }}">
                            </div>
                        </div>
                        <div class="flex_box" style="display: flex;">
                            <div class="l_box" style="width: 62%;">
                                <label for="">Province/Region:</label>
                                <input type="text" name="cname" id="" required style="width: 62%;" value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['region'] : '' }}">
                            </div>
                            <div class="r_box" style="35%">
                                <label for="" style="width: 100%;">Country:</label>
                                <input type="text" name="country" id="" required value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['country'] : '' }}">
                            </div>
                        </div>
                        <div class="flex_box" style="display: flex;">
                            <div class="l_box" style="width: 62%;">
                                <label for="">Contact Name:</label>
                                <input type="text" name="con_name" id="" required style="width: 62%;" value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['name'] : '' }}">
                            </div>
                            <div class="r_box" style="35%">
                                <label for="" style="width: 100%;">Tel No:</label>
                                <input type="number" name="telephone" id="" required value="{{ !empty($docket['delivery_address']) ? $docket['delivery_address']['telephone'] : '' }}">
                            </div>
                        </div>
                    </section>
                </div>
                
                <div class="section_box">
                    <h5 style="margin-bottom: 7px;">7. Dangerous Goods(Cross correct box)</h5>
                    <section style="display: flex; border-bottom: 1px solid #333333b6;">
                        <div class="box" style="width: 73%; border: 0; margin: 0; padding: 0;">
                            <p class="heading">Does this consignment contain any dangerous goods?</p>
                            <p>If Yes, Please call our Customer Service.</p>
                        </div>
                        <div class="box" style="width: 27%; display: flex; border: 0; margin: 0; padding: 0;">
                            <div class="sec_box" style="width: 50%; display: flex;">
                                <p>Yes</p>
                                <input type="checkbox" @if($docket['dangours_good'] == 1) checked @endif>
                            </div>
                            <div class="sec_box" style="width: 50%; display: flex;">
                                <p>No</p>
                                <input type="checkbox" @if($docket['dangours_good'] == 0) checked @endif>
                            </div>
                        </div>
                    </section>
                    <div class="sig_box">
                        <p>CARRIAGE OF THIS CONSIGNMENT IS SUBJECT TO THE TERMS AND CONDITIONS ON THE REVERSE</p>
                        <div class="section_boxs" style="border-top: 1px solid #333333b6; display: flex;">
                            <div class="boxx">
                                <p>Your Signature</p>
                                <input type="text">
                            </div>
                            <div class="boxx boxright">
                                <p>Received by TNT (to be completed by TNT)</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="section_boxs" style="display: flex;">
                            <div class="boxxs">
                                <p>Date</p>
                                @php 
                                    $signD = date('d',strtotime($docket['created_at']));
                                    $signM = date('m',strtotime($docket['created_at']));
                                    $signY = date('y',strtotime($docket['created_at']));
                                @endphp
                                @for($i=0;$i<strlen($signD);$i++)
                                <input type="text" maxlength="1" value="{{ $signD[$i] }}">
                                @endfor
                                <p>/</p>
                                @for($i=0;$i<strlen($signM);$i++)
                                <input type="text" maxlength="1" value="{{ $signM[$i] }}">
                                @endfor
                                <p>/</p>
                                @for($i=0;$i<strlen($signY);$i++)
                                <input type="text" maxlength="1" value="{{ $signY[$i] }}">
                                @endfor
                                <p style="font-size: 10px;">(Day/Month/Year)</p>
                            </div>
                            <div class="boxxs boxsinput">
                                <p>Date</p>
                                <input type="number" maxlength="1">
                                <input type="number" maxlength="1">
                                <p>/</p>
                                <input type="number" maxlength="1">
                                <input type="number" maxlength="1">
                                <p>/</p>
                                <input type="number" maxlength="1">
                                <input type="number" maxlength="1">
                                <p>Time</p>
                                <input type="number" maxlength="1">
                                <input type="number" maxlength="1">
                                <p>:</p>
                                <input type="number" maxlength="1">
                                <input type="number" maxlength="1">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box" style="width: 53%;">
                <section style="display: flex;">
                    <div class="boxs">
                        <!--<h4>Headline : 1800 425</h4>
                        <h4>Private Network : 6000 9999</h4>-->
                        <h4>Services Tax Reg. No :  08AARFM0558L1ZP</h4>
                    </div>
                    <div class="boxs" style="text-align: right;">
                        <!-- Logo -->
                        <div class="logo">
                            <!-- <p class="logo">LOGO</p> -->
                            <img src="http://madniinternational.in/images/logo.png" alt="" class="logo"> <!--Upload image on server first then put image path under source or replace t.t.wepb-->
                            <p class="website"><a href="https://madniinternational.in">www.madniinternational.in</a></p>
                        </div>
                    </div>
                </section>

                <div class="barcode">
                    <!--<svg id="itf-14"></svg>-->
                    <p>Docket No - {{ $docket->id }}</p>
                    <p>Plese quote this Number & if you have enquiry</p>
                </div>

                <div class="section" style="margin-top: 10px; align-items: start;">
                    <div class="boxs" style="width: 62%;">
                        <p>8a. Services <span>(cross one box only to select a Service)</span></p>
                        <div class="select_box" style="margin-top: 10px; margin-bottom: 5px;">
                            <div class="boxs boxs1">

                            </div>
                            <div class="boxs boxs2">
                                
                            </div>
                            <div class="boxs boxs3">
                                <p class="doc" style="margin-left: -40px;"> Documents</p>
                            </div>
                            <div class="boxs boxs3">
                                <p class="doc" style="margin-right: -10px; margin-left: -20px;">Non-Documents</p>
                            </div>
                        </div>
                        <div class="select_box">
                            <div class="boxs boxs1">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="boxs boxs2">
                                <p>Special Express</p>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(0,$service_class) && in_array(1,$service_class[0])) checked @endif>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(0,$service_class) && in_array(0,$service_class[0])) checked @endif>
                            </div>
                        </div>
                        <div class="select_box">
                            <div class="boxs boxs1">
                            </div>
                            <div class="boxs boxs2">
                                <p>Economy</p>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(1,$service_class) && in_array(1,$service_class[1])) checked @endif>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(1,$service_class) && in_array(0,$service_class[1])) checked @endif>
                            </div>
                        </div>
                        <div class="select_box">
                            <div class="boxs boxs1">
                            </div>
                            <div class="boxs boxs2">
                                <p>Freight</p>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(2,$service_class) && in_array(1,$service_class[2])) checked @endif>
                            </div>
                            <div class="boxs boxs3">
                                <input type="checkbox" @if(array_key_exists(2,$service_class) && in_array(0,$service_class[2])) checked @endif>
                            </div>
                        </div>
                        <div class="select_box">
                            <div class="boxs" style="width: 13%;">
                                <i class="fa-solid fa-phone-volume" style="font-size: 14px; margin-right: 5px;"></i>
                            </div>
                            <div class="boxs" style="width: 100%; text-align: left;">
                                <p class="quote">Please contact Customer Service to arrange shipment. For contact and service details, please see brochure.
                                    If no service is selected, the Express service will be provided and invoiced.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="boxs" style="width: 38%;">
                        <p>8b. Option <span>(Cross boxes)</span></p>
                        <div class="section_priority" style="margin-top: 30px;">
                            <section>
                                <div class="boxs" style="width: 85%;">
                                    <h5>Priority</h5>
                                    <p>Priority handling from pickup to delivery For Express and Economy Express</p>
                                </div>
                                <div class="boxs" style="width: 15%;">
                                    <input type="checkbox" name="" id="" @if($docket['pirority'] == 1) checked @endif>
                                </div>
                            </section>
                            <section>
                                <div class="boxs" style="width: 85%; margin-top: 15px;">
                                    <h5>Enhanced Liability</h5>
                                    <p>For documents and non-documents subject to condition I 7 on reverse</p>
                                </div>
                                <div class="boxs" style="width: 15%;">
                                    <input type="checkbox" name="" id="" @if($docket['inhanced_liability'] == 1) checked @endif>
                                </div>
                            </section>
                            <section>
                                <div class="boxsx">
                                    <input type="text" name="" id="" placeholder="Currency" value="{{ strtoupper($docket['liability_currency']) }}">
                                </div>
                                <div class="boxsx">
                                    <p>Please Provide value details </p>
                                </div>
                            </section>
                            <section>
                                <input type="text" name="" id="" placeholder="value for Non-documents only" value="{{ strtoupper($docket['liability_value']) }}">
                            </section>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="boxs inp_box" style="width: 100%; margin-top: 20px; display: block;">
                        <p>9.Special Delivery Instructions <span style="font-weight: 500;">(Reserved for your insrtuctions (if required))</span></p>
                        <input type="text" name="" id="" value="{{ $docket['delivery_instruction'] }}">
                        <input type="text">
                    </div>
                </div>

                <div class="section">
                    <div class="boxs inp_box" style="width: 100%; margin-top: 20px; display: block;">
                        <p>10. Goods Descriptions <span style="font-weight: 500;">( If dutiable please complete section II )</span></p>
                        
                        <table style="border-top: 1px solid #6f6f6f; border-collapse: collapse; margin-top: 10px; width: 450px;">
                            <tr>
                                <th rowspan="2" class="borleft" style="width: 174px; text-align: left;" >
                                    <h5>General Description</h5>
                                    <p style="font-size: 9px !important;">Please put full details on commercial invoice</p>
                                </th>
                                <th rowspan="2" style="31px">
                                    <p>Number of Items</p>
                                </th>
                                <th colspan="2" style="92px">
                                    <h5>Weight</h5>
                                </th>
                                <th colspan="3" style="133px">
                                    <h5>Dimensions</h5>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <p>Kilos</p>
                                </th>
                                <th>
                                    <p>Grams</p>
                                </th>
                                <th>
                                    <p>Length</p>
                                </th>
                                <th>
                                    <p>Width</p>
                                </th>
                                <th>
                                    <p>Height</p>
                                </th>
                            </tr>
                            @php $total_package = $total_weight = $total_volumetric_weight = 0; @endphp
                            @foreach($invoice->invoice_products as $product)
                            @php $total_package += $product->package @endphp
                            @php $total_weight += $product->actual_weight @endphp
                            @php $total_volumetric_weight += $product->volumetric_weight @endphp
                            @php $weight_kg_gm = explode(".",$product->actual_weight); @endphp
                            @php $weight_kg = $weight_kg_gm[0]; @endphp
                            @php $weight_gm = isset($weight_kg_gm[1]) ? $weight_kg_gm[1] : 0 ; @endphp
                            <tr>
                                <td  class="borleft">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </td>
                                <td>
                                    <p>{{ $product->package }}</p>
                                </td>
                                <td>
                                    <p>{{ $weight_kg }}</p>
                                </td>
                                <td>
                                    <p>{{ $weight_gm }}</p>
                                </td>
                                <td>
                                    <p>{{ $product->l }}</p>
                                </td>
                                <td>
                                    <p>{{ $product->w }}</p>
                                </td>
                                <td>
                                    <p>{{ $product->h }}</p>
                                </td>
                            </tr>
                            @endforeach
                            <!--<tr>
                                <td  class="borleft">
                                    <p>Lorem ipsum dolor sit amet</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                                <td>
                                    <p>30</p>
                                </td>
                            </tr>-->
                            @php $total_weight_kg_gm = explode(".",$total_weight); @endphp
                            @php $total_weight_kg = $total_weight_kg_gm[0]; @endphp
                            @php $total_weight_gm = isset($total_weight_kg_gm[1]) ? $total_weight_kg_gm[1] : 0 ; @endphp
                            
                            <tr>
                                <td  class="borleft" style="display: flex; border-bottom: 0; align-items: center; padding-top: 16px;">
                                    <div class="boxs" style="text-align: left; width: 40%;">
                                        <p style="font-size: 9px !important;">Stat. No.</p>
                                    </div>
                                    <div class="boxs" style="text-align: right; width: 55%;">
                                        <p style="font-size: 10.5px !important;">Total</p>
                                    </div>
                                </td>
                                <td>
                                    <p>{{ $total_package }}</p>
                                </td>
                                <td>
                                    <p>{{ $total_weight_kg }}</p>
                                </td>
                                <td>
                                    <p>{{ $total_weight_gm }}</p>
                                </td>
                                <td colspan="3">
                                    <p style="font-weight: 800 !important; font-size: 9px !important;">Consignment subject to volumetric measurement</p>
                                    <p style="font-size: 7px !important; font-weight: 500 !important;">Please refer to our brochure or</p>
                                    <p  style="font-size: 7px !important; font-weight: 500 !important;">call Customer Service</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                    
                <div class="section">
                    <div class="boxs" style="width: 100%; margin-top: 20px; display: block;">
                        <p>11. Dutiable Shipment Detalls <span style="font-weight: 500;">(Complete for dutiable consignments)</span></p>
                        <p class="ptext">Receiw's VAT/TVA/BTW/MWST No</p>
                        <section style="display: flex;">
                            <div class="boxs" style="width: 70%;">
                                @php $vat = (string) $docket['receiver_vat'];  @endphp
                                @for($i=0;$i<16;$i++)
                                <input type="text" name="ac{{$i}}" required maxlength="1" value="{{ $vat[$i] ?? '' }}">
                                @endfor
                                <!--<input type="text" name="ac1" required maxlength="1">
                                <input type="text" name="ac2" required maxlength="1">
                                <input type="text" name="ac3" required maxlength="1">
                                <input type="text" name="ac4" required maxlength="1">
                                <input type="text" name="ac5" required maxlength="1">
                                <input type="text" name="ac6" required maxlength="1">
                                <input type="text" name="ac7" required maxlength="1">
                                <input type="text" name="ac8" required maxlength="1">
                                <input type="text" name="ac9" required maxlength="1">
                                <input type="text" name="ac3" required maxlength="1">
                                <input type="text" name="ac4" required maxlength="1">
                                <input type="text" name="ac5" required maxlength="1">
                                <input type="text" name="ac6" required maxlength="1">
                                <input type="text" name="ac7" required maxlength="1">
                                <input type="text" name="ac8" required maxlength="1">
                                <input type="text" name="ac9" required maxlength="1">-->

                                <div class="flex_box">
                                    <div class="box" style="32%">
                                        <input type="text" placeholder="Currency" value="{{ strtoupper($docket['currency']) }}">
                                    </div>
                                    <div class="box" style="width: 55%;">
                                        <input type="text" placeholder="Invoice value of  dutiables" value="{{ $docket['net_amount'] }}">
                                    </div>
                                </div>
                            </div>
                            <div class="boxs boxscolor" style="width: 30%;">
                                <p class="copy">SENDER'S COPY</p>
                                <p>Please keep for Reference </p>
                            </div>
                        </section>
                        
                    </div>
                </div>

                

            </div>
        </form>
    </div>

    <!-- <div class="button">
        <button onclick="downloadAndRedirect()">PRINT</button>
    </div> -->


<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.20/JsBarcode.all.min.js"></script>
<script>
    JsBarcode("#itf-14", "1234567890123", {format: "itf14"});
</script>
<script>
    // function downloadAndRedirect() {
    //     var element = document.getElementById('pdfinvoice');
    //     var opt = {
    //         margin:       0,
    //         padding: 0,
    //         filename:     'print.pdf',
    //         image:        { type: 'jpeg', quality: 0.98 },
    //         html2canvas:  { scale: 1 },
    //         jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
    //     };

    //     // New Promise-based usage:
    //     html2pdf().set(opt).from(element).outputPdf('save').then(function () {
    //         // Redirect the user back to the 'view-form' URL
    //         location.reload();
    //     });
    // }
</script>
<script type="text/javascript">
   let savedoc = new jsPDF('#pdf','pt','a4');

   savedoc.addHTML(document.body,function() {
      // savedoc.save('madniinvoice.pdf');
   });

   var doc = new jsPDF();

   function saveDiv(divId, title) {
      alert('save')
      doc.fromHTML(`<html><head><title>${title}</title></head><body>` + document.getElementById(divId).innerHTML + `</body></html>`);
      doc.save('div.pdf');
   }

   function printDiv(divId,title) {
      alert('print')
      let mywindow = window.open('', 'PRINT', 'height=100%,width=100%,top=0,left=50');
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
   function setPrintStyles() {
      // Check if the page is in print mode
      if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
      }
    }
    window.onload = setPrintStyles;
</script>
</body>
</html>