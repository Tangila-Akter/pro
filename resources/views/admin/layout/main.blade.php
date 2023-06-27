<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 10:17:56 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min2167.css?v=3.2.0')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{ asset('admin/../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
<script nonce="215ecd17-3c51-40bc-a7ea-8ab947082456">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">

                    <div class="media">
                        <img src="{{ asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>

                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">

                    <div class="media">
                        <img src="{{ asset('admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>

                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">

                    <div class="media">
                        <img src="{{ asset('admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>

                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    
    <div class="sidebar">
    
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
    <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
     <a href="#" class="d-block">Alexander Pierce</a>
    </div>
    </div>
    
    <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
    <button class="btn btn-sidebar">
    <i class="fas fa-search fa-fw"></i>
    </button>
    </div>
    </div>
    </div>
    
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
    <li class="nav-item menu-open"><a href="#" class="nav-link active"><i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard<i class="right fas fa-angle-left"></i></p></a>
    <ul class="nav nav-treeview">
    <li class="nav-item"><a href="index-2.html" class="nav-link active"><i class="far fa-circle nav-icon"></i><p>Dashboard v1</p></a></li>
    </ul>
    </li>
    
    <li class="nav-item"><a href="{{url('/admin_about')}}" class="nav-link"><i class="nav-icon fa fa-clipboard"></i><p>About</p></a></li>
    <li class="nav-item"><a href="{{url('/fact')}}" class="nav-link"><i class="nav-icon fa fa-braille"></i><p>Facts</p></a></li>
    <li class="nav-item"><a href="{{url('/skill')}}" class="nav-link"><i class="nav-icon fa fa-lightbulb"></i><p>Skills</p></a></li>
    <li class="nav-item"><a href="{{url('/admin_testimonial')}}" class="nav-link"><i class="nav-icon fa fa-comments"></i><p>Testimonial</p></a></li>
    
    <li class="nav-item"><a href="{{url('/service')}}" class="nav-link"><i class="nav-icon fas fa-columns"></i><p>Service</p></a></li>
    <li class="nav-item"><a href="{{url('/portfolio')}}" class="nav-link"><i class="nav-icon fas fa-columns"></i><p>Portfolio</p></a></li>
    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link"><i class="nav-icon far fa-envelope"></i><p>Contact us</p></a></li>
    <ul class="nav nav-treeview">
    <li class="nav-item"><a href="pages/mailbox/mailbox.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Inbox</p></a></li>
    <li class="nav-item"><a href="pages/mailbox/compose.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Compose</p></a></li>
    <li class="nav-item"><a href="pages/mailbox/read-mail.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Read</p></a></li></ul></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Resume<i class="fas fa-angle-left right"></i></p></a>
    <ul class="nav nav-treeview">
    <li class="nav-item"><a href="{{url('/summary')}}" class="nav-link"><i class="nav-icon far fa-circle text-info"></i><p>Summary</p></a></li>
    <li class="nav-item"><a href="{{url('/education')}}" class="nav-link"><i class="nav-icon far fa-circle text-info"></i><p>Education</p></a></li>
    <li class="nav-item"><a href="{{url('/experience')}}" class="nav-link"><i class="nav-icon far fa-circle text-info"></i><p>Experience</p></a></li>
    </ul>
    </li>


    <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-book"></i><p>Pages<i class="fas fa-angle-left right"></i></p></a>
    <ul class="nav nav-treeview">
    <li class="nav-item"><a href="pages/examples/invoice.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Invoice</p></a></li>
    <li class="nav-item"><a href="pages/examples/profile.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Profile</p></a></li>
    <li class="nav-item"><a href="pages/examples/e-commerce.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>E-commerce</p></a></li>
    <li class="nav-item"><a href="pages/examples/projects.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Projects</p></a></li>
    <li class="nav-item"><a href="pages/examples/project-add.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Project Add</p></a></li>
    <li class="nav-item"><a href="pages/examples/project-edit.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Project Edit</p></a></li>
    <li class="nav-item"><a href="pages/examples/project-detail.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Project Detail</p></a></li>
    <li class="nav-item"><a href="pages/examples/contacts.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Contacts</p></a></li>
    <li class="nav-item"><a href="pages/examples/faq.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>FAQ</p></a></li>
    
    </ul>
    </li>
    
    <li class="nav-header">LABELS</li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon far fa-circle text-danger"></i><p class="text">Important</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon far fa-circle text-warning"></i><p>Warning</p></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon far fa-circle text-info"></i><p>Informational</p></a></li>
    </ul>
    </nav>
    
    </div>
    
    </aside>

<div class="content-wrapper">

@yield('content')


</div>

<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
    </div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admin/../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>


<script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{ asset('admin/dist/js/adminlte2167.js?v=3.2.0')}}"></script>

// <script src="{{ asset('admin/dist/js/demo.js')}}"></script>

<script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>
