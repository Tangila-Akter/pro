<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 10:19:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="{{ asset('admin/../../plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/../../plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/../../dist/css/adminlte.min2167.css?v=3.2.0')}}">
    <script nonce="dcc72dff-89ef-42e9-80fe-353ea3fdf117">
    (function(w, d) {
        ! function(bv, bw, bx, by) {
            bv[bx] = bv[bx] || {};
            bv[bx].executed = [];
            bv.zaraz = {
                deferred: [],
                listeners: []
            };
            bv.zaraz.q = [];
            bv.zaraz._f = function(bz) {
                return function() {
                    var bA = Array.prototype.slice.call(arguments);
                    bv.zaraz.q.push({
                        m: bz,
                        a: bA
                    })
                }
            };
            for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB);
            bv.zaraz.init = () => {
                var bC = bw.getElementsByTagName(by)[0],
                    bD = bw.createElement(by),
                    bE = bw.getElementsByTagName("title")[0];
                bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text);
                bv[bx].x = Math.random();
                bv[bx].w = bv.screen.width;
                bv[bx].h = bv.screen.height;
                bv[bx].j = bv.innerHeight;
                bv[bx].e = bv.innerWidth;
                bv[bx].l = bv.location.href;
                bv[bx].r = bw.referrer;
                bv[bx].k = bv.screen.colorDepth;
                bv[bx].n = bw.characterSet;
                bv[bx].o = (new Date).getTimezoneOffset();
                if (bv.dataLayer)
                    for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({
                            ...bJ[1],
                            ...bK[1]
                        }))))) zaraz.set(bI[0], bI[1], {
                        scope: "page"
                    });
                bv[bx].q = [];
                for (; bv.zaraz.q.length;) {
                    const bL = bv.zaraz.q.shift();
                    bv[bx].q.push(bL)
                }
                bD.defer = !0;
                for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO
                    .startsWith("_zaraz_"))).forEach((bN => {
                    try {
                        bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN))
                    } catch {
                        bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN)
                    }
                }));
                bD.referrerPolicy = "origin";
                bD.src = "../../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[
                    bx])));
                bC.parentNode.insertBefore(bD, bC)
            };
            ["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>{{ __('Login') }}</a>
        </div>

        <div class="card shadow-lg bg-body rounded">
            <div class="card-body login-card-body ">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <label for="email"
                            class="col-md-12 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <label for="password" class="col-md-12 col-form-label text-md-end">{{ __('Password') }}</label>
                        <input id="password" type="password"
                            class=" form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <p class="mb-3">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </p>
                    <div class="row">


                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

            </div>

        </div>
    </div>


    <script src="{{ asset('admin/../../plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{ asset('admin/../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('admin/../../dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Apr 2023 10:19:51 GMT -->

</html>