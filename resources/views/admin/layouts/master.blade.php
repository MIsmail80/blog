<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">

    @include('admin.partials.topbar')

    <div id="layoutSidenav">

        @include('admin.partials.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>

            @include('admin.partials.footer')
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script>
        $('.post').click(function () {
            let postID = $(this).val();
            4
            let status = $(this).is(":checked") ? 1 : 0;

            $.ajax({
                type: "POST",
                url: "{{url('admin/featured-post')}}",
                data: {
                    post_id: postID,
                    status: status
                },
                success(data) {
                    console.log(data);
                    alert(data);
                },
                error(data){

                }
            });
        });

    </script>
</body>

</html>
