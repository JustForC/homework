<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Snapshot</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/assets/images/favicon.png')}}">
    <link href="{{asset('/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="{{route('indexProduct')}}">
                        <b class="logo-icon">
                            <img src="{{asset('/seeder/locoblack.png')}}" alt="homepage" class="dark-logo" style="height:50px; width:150px" />
                            <img src="{{asset('/seeder/locoblack.png')}}" alt="homepage" class="light-logo" style="height:50px; width:150px" />
                        </b>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('indexProduct')}}" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Product</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('indexSnapshot')}}" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Snapshot</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('indexThumbnail')}}" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Thumbnail</span></a></li>
                    </ul>

                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Snapshot</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Snapshot</h1> 
                    </div>
                    <div class="col-6">
                        <div class="text-end upgrade-btn">
                            <button class="btn btn-primary text-white" onClick="create()">Tambah Snapshot</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" id="listSnapshot">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="formInput" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('/dist/js/waves.js')}}"></script>
    <script src="{{asset('/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('/dist/js/custom.js')}}"></script>
    <script src="{{asset('/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('/dist/js/pages/dashboards/dashboard1.js')}}"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function() {
            read()
        });

        function read() {
            $.get("{{ route('readSnapshot') }}", {}, function(data, status) {
                $("#listSnapshot").html(data);
            });
        }

        function create() {
            $.get("{{ route('createSnapshot') }}", {}, function(data, status) {
                $("#title").html('Create Snapshot')
                $("#formInput").html(data);
                $("#modalForm").modal('show');
            });
        }

        $(document).on("submit", "#formSnapshot", function(e) {
            e.preventDefault();

            var form = $('form'),
            url = form.attr('action');

            $.ajax({
                url: url,
                type: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success:function(response){
                    $(".btn-close").click();
                    read()
                },
            });
        })

        function edit(id) {
            $.get("{{ url('snapshot/edit') }}/" + id, {}, function(data, status) {
                $("#title").html('Edit Snapshot')
                $("#formInput").html(data);
                $("#modalForm").modal('show');
            });
        }

        function erase(id) {
            $.ajax({
                type: "get",
                url: "{{ url('snapshot/delete') }}/" + id,
                data: "name=" + name,
                success: function(data) {
                    read()
                }
            });
        }
    </script>
</body>

</html>