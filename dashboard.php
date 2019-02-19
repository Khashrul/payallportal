
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD l PAYALL</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/form-elements.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hover.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="https://securepay.sslcommerz.com/gwprocess/v3/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://securepay.sslcommerz.com/gwprocess/v3/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://securepay.sslcommerz.com/gwprocess/v3/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://securepay.sslcommerz.com/gwprocess/v3/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://securepay.sslcommerz.com/gwprocess/v3/assets/ico/apple-touch-icon-57-precomposed.png">
    <style>
        .total{font-size:36px; font-weight:500; color:#666666;}
    </style>

    <script>
        function check_cookie() {
            return navigator.cookieEnabled;
        }
    </script>

</head>

<style>
    .navbar-brand {
        width: 150px;
        background-size: auto 50px;
        text-indent: -99999px;
        background-size: contain;
    }
</style>

<body style="background-color:#ffffff">

<!-- Top menu -->
<!--<nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <img src="image/merchant_logo.png">
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
							<span class="li-text">
								Having Problems? Call Support:
							</span>
                    <a href="#"><strong>+88-041-731839</strong></a>
                </li>
            </ul>
        </div>
    </div>
</nav>-->

<!-- Top content -->
<div class="top-content">

    <div>
        <div class="container">

            <div class="col-sm-6">
                <img src="image/logo.png" alt="dewyitpayall" class="pull-left">

            </div>
            <div class="col-sm-6" style="margin-top:20px;">
                <p class="pull-right">

                    <span class="li-text">
								Having Problems? Call Support:
							</span>
                    <a href="#"><strong>+88 096 0266 6196</strong></a>
                </p><br>
                <p class="small pull-right"><a href="dashboard.php">Dashboard</a> | <a href="profile.php">Settings</a> | <a href="index.php">Logout</a></p>

            </div>

            <div class="row">


                <div class="col-md-12 col-xs-12 pull-left form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3> Dashboard</h3>
                        </div>
                    </div>
                    <div class="form-bottom">
                           <div class="pull-left col-md-8">
                               <div class="card-body">
                                   <form action="#">
                                       <div class="form-body">
                                           <h4>Transaction Search</h4>
                                           <!--/row-->
                                           <div class="row">
                                               <div class="col-md-12 ">
                                                   <div class="form-group">
                                                       <input type="text" class="form-control" placeholder="Transaction id">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <select class="form-control custom-select">
                                                           <option>Order Status</option>
                                                           <option>All</option>
                                                           <option>Authorized</option>
                                                           <option>Captured</option>
                                                           <option>Failed</option>
                                                           <option>Decline</option>
                                                           <option>Refunded</option>
                                                           <option>Voided</option>
                                                       </select>
                                                   </div>
                                               </div>
                                               <!--/span-->
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <select class="form-control custom-select">
                                                           <option>Payment Type</option>
                                                           <option>All</option>
                                                           <option>Mastercard</option>
                                                           <option>Visa</option>
                                                       </select>
                                                   </div>
                                               </div>
                                               <!--/span-->
                                           </div>
                                           <!--/row-->
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <input type="date" class="form-control" placeholder="From">

                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <input type="date" class="form-control" placeholder="Today">

                                                   </div>
                                               </div>
                                               <!--/span-->
                                               <!--/span-->
                                           </div>
                                       </div>
                                       <div class="form-actions">
                                           <button type="submit" class="btn btn-success"></i> Search</button>
                                           <button type="button" class="btn btn-inverse">Cancel</button>
                                           <br>
                                           <hr>
                                       </div>
                                   </form>
                               </div>
                           </div>
                           <div class="pull-right col-md-4">

                                   <div>
                                       <dl class="dl-horizontal">
                                           <img src="image/images.png" alt="dewyitpayall">
                                           <!--dt>Description:</dt>
                                           <dd>Grameenphone Flexiload</dd>
                                           <dt>Amount:</dt>
                                           <dd>?</dd-->
                                           <hr>
                                           <dt>Today Sales :</dt>
                                           <dd class="total">4,545.00</dd>

                                       </dl>

                                   </div>
                           </div>

                        <div class="pull-left col-md-12">

                            <div class="row-fluid" data-ng-show="criteriaResultsData.results.length > 0 &amp;&amp; !criteriaResultsData.executing">
                                <div class="span12 ng-scope" data-ng-controller="SearchListCtrl" data-ng-include="'assets/tns/search/views/search/list-orders.html?cache=' + warCacheToken"><div class="search search-list ng-scope">
                                        <div id="result-buttons">
                                            <div class="btn btn-small capture-btn disabled" data-ng-show="hasBulkCaptureButton()" id="bulkCaptureButton" data-ng-click="showBulkCapture()" style="display: none;">Capture Selected</div>
                                            <div>
                                                <a id="csvDownloadLink" href="" class="btn btn-small download-btn ng-binding" data-ng-click="goToCsvDownload()">
                                                    Export results to CSV&nbsp;<i class="icon-external-link"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <table id="orderResults" class="table table-condensed table-bordered table-search-results ng-isolate-scope ng-scope" data-responsive-table="" data-table-data="data.criteriaResultsData.results" data-columns="columns" data-current-page="data.currentPage" data-page-length="data.pageLength" data-tns-details-url-callback="viewTransactionDetails()" data-context="searchContext">
                                            <thead class="table-header">
                                            <!--

                                            ORDER OF DISPLAY
                                            Order Date
                                            Merchant ID (Merchant Manager only)
                                            Order ID
                                            Order Reference
                                            Payment Method  TBC: Display the payment type, e.g. Card and the Card Scheme, e.g. VISA?
                                            Account Identifier (masked, no view unmasked account identifier function)
                                            Account Holder
                                            Amount and Currency
                                            Order Status



                                            -->
                                            <tr>
                                                <th data-responsive-column="expand" data-columns="columns" data-table-data="tableData" class="column column-action ng-isolate-scope ng-scope">
                                                    S/N
                                                     </th>

                                                <th data-responsive-column="orderDate" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Order Date</th>
                                                <th data-responsive-column="merchantId" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding" style="display: none;">Merchant ID</th>
                                                <th data-responsive-column="orderId" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Order ID</th>
                                                <th data-responsive-column="orderReference" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Order Reference</th>
                                                <th data-responsive-column="paymentMethod" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Payment Method</th>
                                                <th data-responsive-column="accountIdentifier" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Account Identifier</th>
                                                <th data-responsive-column="accountHolder" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding" style="display: none;">Account Holder</th>
                                                <th data-responsive-column="orderAmount" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Order Amount</th>
                                                <th data-responsive-column="orderStatus" data-columns="columns" class="ng-isolate-scope ng-scope ng-binding">Order Status</th>

                                                <th data-responsive-column="view" data-columns="columns" data-table-data="tableData" class="actions column column-action ng-isolate-scope ng-scope"> Actions</th>
                                                <th data-responsive-column="select" data-columns="columns" data-table-data="tableData" class="group-actions ng-isolate-scope ng-scope" style="display: none;">
                                                    <input id="checkbox-all" type="checkbox" data-ng-click="toggleSelect()" data-ng-checked="getSelectAll()">
                                                </th>
                                            </tr>
                                            </thead>
                                            <!-- ngRepeat: row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength --><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 09:05:56pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497538886</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Mastercard</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">512083xxxxxx0310</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Tahirah butt</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Captured</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="details.php" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497538886', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497538886" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 07:56:59pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497534915</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">497040xxxxxx6707</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">christian aubry</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">14,500.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="details.php" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497534915', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497534915" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 07:27:07pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497533117</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">497040xxxxxx6707</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">christian aubry</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497533117', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497533117" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 05:59:31pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497527806</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Mastercard</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">513286xxxxxx2413</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Yves Verdier</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Captured</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497527806', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497527806" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 05:16:34pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497525280</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">497402xxxxxx6510</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Alexandre AVON</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497525280', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497525280" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 03:30:03pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497518883</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Mastercard</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">513101xxxxxx9294</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Mh Verdier</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497518883', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497518883" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 03:21:16pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497518421</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">453304xxxxxx5611</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Pierre Verdier</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497518421', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497518421" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>
                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 03:14:53pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497517976</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Mastercard</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">557385xxxxxx7261</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Raul Rodriguez Munoz</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497517976', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497517976" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Thursday, June 15, 2017 02:08:04pm (+06:00)" class="ng-scope ng-binding">June 15, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497513894</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">453904xxxxxx2210</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">bo norberg</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Captured</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497513894', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497513894" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody><tbody class="table-body-search-results ng-scope" data-ng-repeat="row in tableData | startFrom:(currentPage - 1) * pageLength | limitTo:pageLength">
                                            <tr id="orderResultRow" class="">
                                                <td data-responsive-column="expand" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope">
                                                    <div class="btn btn-mini flat list-action" data-ng-disabled="row.isDummy" data-ng-hide="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded &amp;&amp; !row.isDummy">
                                                        <i class="icon-chevron-down action-detail expand-action"></i>
                                                    </div>
                                                    <div class="btn btn-mini flat list-action" data-ng-show="row.expanded &amp;&amp; !row.isDummy" data-ng-click="row.expanded = !row.expanded" style="display: none;">
                                                        <i class="icon-chevron-up action-detail collapse-action"></i>
                                                    </div>
                                                </td>
                                                <td id="orderResultOrderDate" data-responsive-column="orderDate" data-columns="columns" data-row="row" class="date ng-isolate-scope ng-scope"><span tooltip-placement="left" tooltip="Wednesday, June 14, 2017 08:36:55pm (+06:00)" class="ng-scope ng-binding">June 14, 2017</span></td>
                                                <td id="orderResultMerchantId" data-responsive-column="merchantId" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding" style="display: none;">50040005</td>
                                                <td id="orderResultOrderId" data-responsive-column="orderId" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding">1497450937</td>
                                                <td id="orderResultOrderReference" data-responsive-column="orderReference" data-columns="columns" data-row="row" class="identifier break ng-isolate-scope ng-scope ng-binding"></td>
                                                <td id="orderResultPaymentMethod" data-responsive-column="paymentMethod" data-columns="columns" data-row="row" class="enumeration ng-isolate-scope ng-scope ng-binding">Visa</td>
                                                <td id="orderResultAccountIdentifier" data-responsive-column="accountIdentifier" data-columns="columns" data-row="row" class="identifier ng-isolate-scope ng-scope ng-binding">497490xxxxxx6136</td>
                                                <td id="orderResultAccountHolder" data-responsive-column="accountHolder" data-columns="columns" data-row="row" class="text ng-isolate-scope ng-scope ng-binding" style="display: none;">Evelyne LE GALL</td>
                                                <td id="orderResultOrderAmount" data-responsive-column="orderAmount" data-columns="columns" data-row="row" class="amount ng-isolate-scope ng-scope ng-binding">23,000.00 BDT</td>
                                                <td id="orderResultOrderStatus" data-responsive-column="orderStatus" data-columns="columns" data-row="row" class="status ng-isolate-scope ng-scope">
                                                    <span class="ng-binding">Failed</span>
                                                </td>

                                                <td data-responsive-column="view" data-columns="columns" data-row="row" class="actions ng-isolate-scope ng-scope" data-details-callback="tnsDetailsUrlCallback()">
                                                    <a href="" class="btn btn-mini flat list-action view-action ng-binding" data-ng-disabled="row.isDummy" data-ng-click="!row.isDummy &amp;&amp; orderDetails('1497450937', '50040005', '35', 'api')">
                                                        View
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                </td>
                                                <td id="orderResultSelect" data-responsive-column="select" data-columns="columns" data-row="row" class="group-actions ng-isolate-scope ng-scope" style="display: none;"><input id="checkbox-1497450937" data-ng-disabled="row.isDummy" type="checkbox" data-ng-model="row.selected" class="ng-pristine ng-valid"></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <div data-ng-include="'assets/tns/search/views/search/results-footer.html?cache=' + warCacheToken">
                                            <div class="pagination">
                                                <a href="#">&laquo;</a>
                                                <a href="#" class="active">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">6</a>
                                                <a href="#">&raquo;</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div data-ng-controller="SearchBulkCaptureCtrl" data-ng-include="'assets/tns/search/views/search/bulkCapture/bulkCaptureModal.html?cache=' + warCacheToken" class="ng-scope"></div>

                                    <div data-ng-include="'assets/tns/search/views/search/download/blockOrderDownloadModal.html?cache=' + warCacheToken" class="ng-scope"></div></div>
                            </div>



                        </div>
                    </div>

                </div>


                <div class="col-sm-12" style="margin-top:20px;">
                    <p class="small pull-right">
                        <a href="#">Powered by @ <strong>DEWY IT LIMITED</strong></a>
                    </p>
                    <p class="small pull-left"><a href="#">Get Help</a> | <a href="#">How to Pay</a></p>

                    <br> <br> <br> <br>
                </div>
            </div>

        </div>

    </div>

</div>


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/backstretch.min.js"></script>
<script src="js/script.js"></script>
<script>
    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find("i.indicator")
            .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
    }
    $('#accordion').on('hidden.bs.collapse', toggleChevron);
    $('#accordion').on('shown.bs.collapse', toggleChevron);
</script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script type="text/javascript">

    // HANDLE COOKIE
    var cookieMessge = "";

    if(check_cookie()) {

        cookieMessge = "";

    } else {
        cookieMessge = "<div class='white-box'><div class='content'><div style='text-align: justify;padding: 10px 8px; color: red;font-size: 12px;'><h3>An Error - Cookies Required</h3><br /><p><strong>Cookies are not turned on in your Browser</strong> - To access the payment pages you need to have cookies enabled. Our cookies are only used to identify you while you are making your payment. They are stored temporarily as a short text string in your browser</p><br /><p>All browsers are configured differently, so check your browser's help on enabling cookies.</p></div></div></div>";

        document.cookie = "SSLCZ_ENABLE_DATA=59f56de39b9f2";
        document.cookie = "PHPSESSID=oo3v3p00080n3iftdqlrjv1l86";
    }

    document.getElementById("cookieEnableMessage").innerHTML = cookieMessge;
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-32646854-2', 'auto');
    ga('send', 'pageview');

</script>
<script>


    if(document.getElementById("defaultVISALink")) {
        var discountGlobalVISALink = document.getElementById("defaultVISALink").href;
    } else {
        var discountGlobalVISALink = "";
    }

    if(document.getElementById("defaultMASTERLink")) {
        var discountGlobalMASTERLink = document.getElementById("defaultMASTERLink").href;
    } else {
        var discountGlobalMASTERLink = "";
    }

    if(document.getElementById("defaultAMEXLink")) {
        var discountGlobalAMEXLink = document.getElementById("defaultAMEXLink").href;
    } else {
        var discountGlobalAMEXLink = "";
    }

    if(document.getElementById("defaultMASTERLinkDBBL")) {
        var defaultMASTERLinkDBBLGlobal = document.getElementById("defaultMASTERLinkDBBL").href;
    } else {
        var defaultMASTERLinkDBBLGlobal = "";
    }

    if(document.getElementById("defaultVISALinkDBBL")) {
        var defaultVISALinkDBBLGlobal = document.getElementById("defaultVISALinkDBBL").href;
    } else {
        var defaultVISALinkDBBLGlobal = "";
    }

    if(document.getElementById("defaultMASTERLinkBRAC")) {
        var defaultMASTERLinkBRACGlobal = document.getElementById("defaultMASTERLinkBRAC").href;
    } else {
        var defaultMASTERLinkBRACGlobal = "";
    }

    if(document.getElementById("defaultVISALinkBRAC")) {
        var defaultVISALinkBRACGlobal = document.getElementById("defaultVISALinkBRAC").href;
    } else {
        var defaultVISALinkBRACGlobal = "";
    }

    if(document.getElementById("defaultAMEXLinkCity")) {
        var defaultAMEXLinkCityGlobal = document.getElementById("defaultAMEXLinkCity").href;
    } else {
        var defaultAMEXLinkCityGlobal = "";
    }

    if(document.getElementById("defaultMASTERLinkCity")) {
        var defaultMASTERLinkCityGlobal = document.getElementById("defaultMASTERLinkCity").href;
    } else {
        var defaultMASTERLinkCityGlobal = "";
    }

    if(document.getElementById("defaultVISALinkCity")) {
        var defaultVISALinkCityGlobal = document.getElementById("defaultVISALinkCity").href;
    } else {
        var defaultVISALinkCityGlobal = "";
    }

    if(document.getElementById("defaultMASTERLinkEBL")) {
        var defaultMASTERLinkEBLGlobal = document.getElementById("defaultMASTERLinkEBL").href;
    } else {
        var defaultMASTERLinkEBLGlobal = "";
    }

    if(document.getElementById("defaultVISALinkEBL")) {
        var defaultVISALinkEBLGlobal = document.getElementById("defaultVISALinkEBL").href;
    } else {
        var defaultVISALinkEBLGlobal = "";
    }




    function dicountOfferEnable(){
        if(document.getElementById('discount_offer') && document.getElementById('discount_offer').checked == true){
            if(document.getElementById("defaultVISALink") && discountGlobalVISALink!="") document.getElementById("defaultVISALink").href = discountGlobalVISALink + '&discount_offer=yes';
            if(document.getElementById("defaultMASTERLink") && discountGlobalMASTERLink!="") document.getElementById("defaultMASTERLink").href = discountGlobalMASTERLink + '&discount_offer=yes';
            if(document.getElementById("defaultAMEXLink") && discountGlobalAMEXLink!="") document.getElementById("defaultAMEXLink").href = discountGlobalAMEXLink + '&discount_offer=yes';

            if(document.getElementById("defaultMASTERLinkDBBL") && defaultMASTERLinkDBBLGlobal!="") document.getElementById("defaultMASTERLinkDBBL").href = defaultMASTERLinkDBBLGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultVISALinkDBBL") && defaultVISALinkDBBLGlobal!="") document.getElementById("defaultVISALinkDBBL").href = defaultVISALinkDBBLGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultMASTERLinkBRAC") && defaultMASTERLinkBRACGlobal!="") document.getElementById("defaultMASTERLinkBRAC").href = defaultMASTERLinkBRACGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultVISALinkBRAC") && defaultVISALinkBRACGlobal!="") document.getElementById("defaultVISALinkBRAC").href = defaultVISALinkBRACGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultAMEXLinkCity") && defaultAMEXLinkCityGlobal!="") document.getElementById("defaultAMEXLinkCity").href = defaultAMEXLinkCityGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultMASTERLinkCity") && defaultMASTERLinkCityGlobal!="") document.getElementById("defaultMASTERLinkCity").href = defaultMASTERLinkCityGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultVISALinkCity") && defaultVISALinkCityGlobal!="") document.getElementById("defaultVISALinkCity").href = defaultVISALinkCityGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultMASTERLinkEBL") && defaultMASTERLinkEBLGlobal!="") document.getElementById("defaultMASTERLinkEBL").href = defaultMASTERLinkEBLGlobal + '&discount_offer=yes';
            if(document.getElementById("defaultVISALinkEBL") && defaultVISALinkEBLGlobal!="") document.getElementById("defaultVISALinkEBL").href = defaultVISALinkEBLGlobal + '&discount_offer=yes';

        } else {
            if(document.getElementById("defaultVISALink") && discountGlobalVISALink!="") document.getElementById("defaultVISALink").href = discountGlobalVISALink;
            if(document.getElementById("defaultMASTERLink") && discountGlobalMASTERLink!="") document.getElementById("defaultMASTERLink").href = discountGlobalMASTERLink;

            if(document.getElementById("defaultMASTERLinkDBBL") && defaultMASTERLinkDBBLGlobal!="") document.getElementById("defaultMASTERLinkDBBL").href = defaultMASTERLinkDBBLGlobal;
            if(document.getElementById("defaultVISALinkDBBL") && defaultVISALinkDBBLGlobal!="") document.getElementById("defaultVISALinkDBBL").href = defaultVISALinkDBBLGlobal;
            if(document.getElementById("defaultMASTERLinkBRAC") && defaultMASTERLinkBRACGlobal!="") document.getElementById("defaultMASTERLinkBRAC").href = defaultMASTERLinkBRACGlobal;
            if(document.getElementById("defaultVISALinkBRAC") && defaultVISALinkBRACGlobal!="") document.getElementById("defaultVISALinkBRAC").href = defaultVISALinkBRACGlobal;
            if(document.getElementById("defaultAMEXLinkCity") && defaultAMEXLinkCityGlobal!="") document.getElementById("defaultAMEXLinkCity").href = defaultAMEXLinkCityGlobal;
            if(document.getElementById("defaultMASTERLinkCity") && defaultMASTERLinkCityGlobal!="") document.getElementById("defaultMASTERLinkCity").href = defaultMASTERLinkCityGlobal;
            if(document.getElementById("defaultVISALinkCity") && defaultVISALinkCityGlobal!="") document.getElementById("defaultVISALinkCity").href = defaultVISALinkCityGlobal;
            if(document.getElementById("defaultMASTERLinkEBL") && defaultMASTERLinkEBLGlobal!="") document.getElementById("defaultMASTERLinkEBL").href = defaultMASTERLinkEBLGlobal;
            if(document.getElementById("defaultVISALinkEBL") && defaultVISALinkEBLGlobal!="") document.getElementById("defaultVISALinkEBL").href = defaultVISALinkEBLGlobal;
        }
    }

    function dicountOfferEnable_before(){
        if(document.getElementById('discount_offer') ){
            document.getElementById('discount_offer').checked = true;
            dicountOfferEnable();
        }
    }
</script>
<script>
    $('input:checkbox').prop('checked', false);
</script>

<script>
    if(document.getElementById("discountModal")) {
        $(document).ready(function() {
            $('#discountModal').modal('show');
        });
    }
</script>

</body>

</html>
