<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Print TAM Bill</title>

    <style>
    	
		.color{
		    background-color: gray;
		    
		}

		.col-3{
		    border: 0.2mm solid;
		}
		.col-5{
		    border: 0.2mm solid;
		}
		.col-6{
		    border: 0.2mm solid;
		}
		.col-4{
		    border: 0.2mm solid;
		}
		.col-2{
		    border: 0.2mm solid;
		}
		.col-8{
		    border: 0.2mm solid;
		}

    </style>
</head>


<body>
    
    {{-- @foreach ($orders as $order) --}}
        <div class="container ">
            <!-- header -->
            <div class="row" style="height: 180px" >
                <div class="col" style="margin-top: 20px;">
                    <img src="{{url('storage/temp_files/TAM.png')}}";>
                </div>
                <div class="col" style="margin-top: 20px;" >
                    <h1 class="font-weight-bold" style="text-align: center" >
                        WAY Bill</h1>
                    <p class="font-weight-normal" style="text-align: center">
                        To follow your shipment please visit</p>
                    <p style="text-align: center" >
                        www.<b>TAM</b>.TB 
                    </p>

                </div>
                <div class="col"style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <b>7797 0 0 0 1</b>
                    </div>
                    <div class="col-md-10" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        info@<b>TAM</b>.bh
                        
                    </div>
                    <div class="col-md-10" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                        </svg>
                        www.<b>TAM</b>.bh
                        
                    </div>
                </div>
                    
                </div>
            </div>
                <!-- 1st Table -->
                <div class="row border border-dark" >
                    <!-- Order Information -->
                    <div class="col-3 border ">
                        <div class="row color" >
                            <div class="font-weight-bold" > ORDER INFORMATION</div>
                        </div>

                        <div class="row ">
                            <div class="col-6">
                                Date of Order
                            </div>
                            <div class="col-6">
                                {{-- {{ $order->created_at->format('m/d/Y') }} --}}
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6  ">
                                Time Of Oredr
                            </div>
                            <div class="col-6  ">
                                {{-- {{ $order->created_at->format('H:i:s') }} --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 ">
                                Date of Pickup
                            </div>
                            <div class="col-6 ">
                                {{-- {{ $order->created_at->format('Y-m-d') }} --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 ">
                                Date of Dilivery
                            </div>
                            <div class="col-6 ">
                                {{-- {{ $order->order_delivery_date }} --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ">
                                Assigned Courier
                            </div>
                            
                        </div>
                    </div>
                    <!-- Package Information -->
                    <div class="col-5">
                        <div class="row color">
                            <div style="padding-left: 25%;" class="font-weight-bold"> PACKAGE INFORMATION</div>
                        </div>

                        <div class="row ">
                            <div class="col-4">
                                Task Id Info
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-4">
                                Package Type
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Package Content
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Package Size
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Additional Details
                            </div>
                        </div>
                    </div>
                    <!-- WayBill Number/Barcode -->
                    <div class="col-4">
                        <div class="row color">
                            <div class="font-weight-bold" style="padding-left: 14%;"> WAYBILL NUMBER/BARCODE</div>
                        </div>
                        <div style="text-align: center; margin-top: 40px; font-size: 35px;">
                            {{-- @php
                                if ($order->external_way_bill_number && $order->external_way_bill_number != "") {
                                    echo $order->external_way_bill_number;
                                }else if ($order->preInvoice) {
                                    echo 'P' . $order->preInvoice->id;
                                }else{
                                    echo 'A' . $order->id;
                                }
                            @endphp --}}
                        </div>
                    </div>
                </div>
                <!-- 2nd Table -->
                <div class="row border " >
                    <!-- From Sender -->
                    <div class="col-3">
                        <div class="row color">
                            <div class="font-weight-bold" > FROM SENDER</div>
                        </div>

                        <div class="row ">
                            <div class="col-6">
                                Name
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6">
                                Company
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Department
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Mobile
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Address
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                Location Description
                            </div>
                        </div>
                    </div>
                    <!-- FROM Receiver -->
                    <div class="col-5">
                        <div class="row color">
                            <div class="font-weight-bold" style="padding-left: 28%;" > FROM RECEIVER</div>
                        </div>

                        <div class="row ">
                            <div class="col-4">
                                Name
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-4">
                                Company
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Department
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Mobile
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Address
                            </div>
                            <div class="col-8">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                Location Description
                            </div>
                        </div>
                    </div>
                    <!-- Receiver Signature -->
                    <div class="col-4">
                        <div class="row color">
                            <div class="font-weight-bold" style="padding-left: 14%;"> RECEIVER SIGNATURE</div>
                        </div>
                        <div class="row ">
                            <div>I have received the above mentioned package in good Order and condition.</div>
                        </div>
                        <div class="row">
                            <div class="col-6 ">Sender`s Signature</div>
                            <div class="col-6 ">Receiver`s Signature</div>
                        </div>
                        <div class="row" style="height: 34px;" >
                            <span ></span>
                        </div>
                        <div class="row">
                            <div class="col-6 ">Name</div>
                            <div class="col-6 "></div>
                        </div>
                        <div class="row">
                            <div class="col-6 ">CPR</div>
                            <div class="col-6 "></div>
                        </div>
                    </div>
                </div>
                <!-- 3rd Table -->
                <div class="row border " style="border: 1px solid">
                    <!-- Total Amount -->
                    <div class="col-3">
                        <div class="row color">
                            <div class="font-weight-bold">TOTAL AMOUNT</div>
                        </div>

                        <div class="row ">
                            <div class="col-6">
                                Package Price
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6">
                                Delivery Charges
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Total Amount
                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                    </div>
                    <!-- TAM Office use Only -->
                    <div class="col-6">
                        <div class="row color">
                            <div class="font-weight-bold" style="padding-left: 23%;"> TAM OFFICE USE ONLY </div>
                        </div>
                            <div class="row ">
                                <div class="col-3">
                                    Cashier Signature
                                </div>
                                <div class="col-6">
                                    accountant Signature
                                </div>
                                <div class="col-3">
                                    accountant Signature
                                </div>
                        </div>
                    </div>
                    <div class="col-3">
                            <div> stamp</div>
                    </div>
                </div>
                <!-- footer -->
        

        </div>
        <!-- Next Table -->
    {{-- @endforeach --}}

</body>

</html