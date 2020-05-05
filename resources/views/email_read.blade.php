@extends('layout.app')

@section('title','email read')

@section('linkcss')
    <!-- vendor css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
    

    <!-- ekko-lightbox css -->
    <link rel="stylesheet" href="/assets/plugins/ekko-lightbox/css/ekko-lightbox.min.css">
    <link rel="stylesheet" href="/assets/plugins/lightbox2-master/css/lightbox.min.css">
    <!-- page css -->
    <link rel="stylesheet" href="/assets/css/pages/pages.css">
@endsection


@section('body')
    <!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<!-- [ Header ] start -->
	 <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card email-card">
                    <div class="card-header">
                        <div class="mail-header">
                            <div class="row align-items-center">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3">
                                    <a href="index.html" class="b-brand">
                                        <div class="b-bg">
                                            {{$firstLetter}}
                                        </div>
                                        <span class="b-title text-muted">{{	session()->get('userObject')->nom . ' ' . session()->get('userObject')->prenom}}</span>
                                    </a>
                                </div>
                                <!-- [ email-left section ] end -->
                                <!-- [ email-right section ] start -->
                                <div class="col-xl-10 col-md-9">
                                    <div class="input-group mb-0">
                                    </div>
                                </div>
                                <!-- [ email-right section ] end -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mail-body">
                            <div class="row">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3">
                                    <div class="mb-3">
                                        <a href="{{url('contact')}}" class="btn waves-effect waves-light btn-rounded btn-outline-primary">+ Compose</a>
                                    </div>
                                    <ul class="mb-2 nav nav-tab flex-column nav-pills">
                                        <li class="nav-item mail-section">
                                            <a class="nav-link text-left active" href="{{url('messagerie')}}">
                                                <span><i class="feather icon-inbox"></i>Index</span>
                                                <span class="float-right">{{$totalMessage}}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mail-section">
                                            <a class="nav-link text-left" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-mail" role="tab">
                                                <span><i class="fas fa-eye"></i> Lu</span>
                                                <span class="float-right">{{$totalLu}}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mail-section">
                                            <a class="nav-link text-left" id="v-pills-Trash-tab" data-toggle="pill" href="#v-pills-Trash" role="tab">
                                                <span><i class="fas fa-eye-slash"></i> Non Lu</span>
                                                <span class="float-right">{{$totalnonLu}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- [ email-left section ] end -->
                                <!-- [ email-right section ] start -->
                                <div class="col-xl-10 col-md-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="email-read">
                                                <div class="photo-table m-r-10">
                                                </div>
                                                <div style="margin-left:3.2em;">
                                                    <a href="#">
                                                        <p class="user-name text-dark mb-1"><strong>{{$recepteur[0]->nom . ' ' . $recepteur[0]->prenom}}</strong></p>
                                                    </a>
                                                    <a class="user-mail txt-muted" href="#">
                                                        <p class="user-name text-dark mb-1"><strong>From:{{$recepteur[0]->username_email}}</strong></p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="m-b-20 m-l-50 p-l-10 email-contant">
                                                <div class="photo-contant">
                                                    <div>
                                                        <div class="email-content">
															{{$recepteur[0]->message_ecrit}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ email-right section ] start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    
    
@endsection

@section('scripts')
    <!-- Required Js -->
    <script src="/assets/js/vendor-all.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/ripple.js"></script>
    <script src="/assets/js/pcoded.min.js"></script>
	<script src="/assets/js/menu-setting.min.js"></script>

<!-- ekko-lightbox Js -->
<script src="/assets/plugins/ekko-lightbox/js/ekko-lightbox.min.js"></script>
<script src="/assets/plugins/lightbox2-master/js/lightbox.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    });
    
</script>
<script>
    $(document).ready(function () {
        $('#fh5co-header-section').css('background-image', 'url("/images/2.jpg")');
        $("a.active").removeClass();
        $("#PageActuel").val(window.location);
        $("#InDateEntree").val($("#DateEntree").text());
        $("#InDateSortie").val($("#DateSortie").text());
    });
</script>
<script>
    document.getElementById('footer').style.display="none";
</script>
<script>
    document.getElementById('footer').style.display="none";
</script>
@endsection