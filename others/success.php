<?php
if(isset($_REQUEST['orderId'],$_REQUEST['amount'],$_REQUEST['status']))
{
    $orderId  = $_REQUEST['orderId'];
    $amount  = $_REQUEST['amount'];
    $status  = $_REQUEST['status'];

}else{

    echo '<p><h3>Access denied</h3></p>';
    echo '<p>You are not authorized to access this page.</p>';
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Approved Order Details</title>
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
<!-- Top menu -->
<nav class="navbar navbar-inverse " role="navigation">
    <div class="container">
        <div class="navbar-header">
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
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
</nav>

<!-- Top content -->
<div class="top-content">

    <div>
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <p class="js_connect" style="display:none;color: green"><b>Connecting to the payment Gateway .... </b></p>
                    <p class="js_sorry" style="display:none;color: red"><b>Sorry! Please contact your administrator.</b></p>
                </div>


                <div class="col-md-12 col-xs-12 pull-right form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Approved Order Details</h3>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <div>
                            <dl class="dl-horizontal">
                                <dt>Order ID:</dt>
                                <dd style='overflow: inherit;'><?=$orderId?></dd><br>
                                <dt>Transction Type:</dt>
                                <dd>Purchase</dd><br>
                                <dt>Total Amount(BDT):</dt>
                                <dd class="total"><?=$amount?></dd>
                                <dt>Status:</dt>
                                <dd class="total" style="color: green"><?=$status?></dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="margin-top:20px;">
                    <span><b style="margin-right: -113%">Powered By</b></span>
                    <img src="image/powered.png" alt="SSLCOMMERZ" class="pull-right">
                    <div class="pull-left" id="thawteseal"  title="Click to Verify - This site chose Thawte SSL for secure e-commerce and confidential communications.">
                        <script type="text/javascript" src="https://seal.thawte.com/getthawteseal?host_name=securepay.sslcommerz.com&amp;size=S&amp;lang=en"></script>
                    </div>
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
    $('input:checkbox').prop('checked', false);
</script>

<script>
    if(document.getElementById("discountModal")) {
        $(document).ready(function() {
            $('#discountModal').modal('show');
        });
    }
</script>
</html>
