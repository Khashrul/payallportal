
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEWYIT PAYALL</title>

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
                <img src="image/logo.png" alt="SSLCOMMERZ" class="pull-left">

            </div>
            <div class="col-sm-6" style="margin-top:20px;">
                <p class="pull-right">

                    <span class="li-text">
								Having Problems? Call Support:
							</span>
                    <a href="#"><strong>+88-041-731839</strong></a>
                </p>

            </div>

            <div class="row">



                <div class="col-md-12 col-xs-12 pull-right form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>There is your Transaction Status !</h3>
                        </div>
                    </div>

                        <div class="form-bottom">
                            <div class="pull-left col-md-4">
                                <br><br><br>
                                <p>
                                Thanks ! Your transaction has been successful.
                                </p>

                            </div>
                            <div class="pull-right col-md-6">

                                    <div>
                                        <dl class="dl-horizontal">
                                            <img src="image/images.png" alt="SSLCOMMERZ">
                                            <!--dt>Description:</dt>
                                            <dd>Grameenphone Flexiload</dd>
                                            <dt>Amount:</dt>
                                            <dd>?</dd-->
                                            <hr>
                                            <dt>Card Holder :</dt>
                                            <dd style='overflow: inherit;'>Joy Das</dd>
                                            <dt>Card Number :</dt>
                                            <dd style='overflow: inherit;'>4231 xxxx xx62 0021</dd>
                                            <dt>Transaction ID :</dt>
                                            <dd style='overflow: inherit;'>100136229</dd>
                                            <dt>Total Amount:</dt>
                                            <dd class="total">4,545.00</dd>

                                        </dl>

                                        <!--p class="small pull-left"><a href="#">Get Help</a> | <a href="#">How to Pay</a></p-->



                                        <hr>
                                        <p class="small"><a href="javascript:void(0)" class="text-danger">Continue Shopping</a> & return to fascrv.com</p>


                                        <!--img src='https://securepay.sslcommerz.com/gwprocess/v3/assets/img/megaOffer.png' class='img-responsive' title='Mega Campaign' alt='Mega Campaign'/-->


                                        <div id='cookieEnableMessage' ></div>
                                    </div>


                        </div>

                </div>




                <div class="col-sm-12" style="margin-top:20px;">
                    <span><b style="margin-right: 0%">Powered By @ <a href="#"> Dewy IT Limited</a></b></span>
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
