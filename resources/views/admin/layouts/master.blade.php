<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xshop-Dự án Mẫu</title>
    <link rel="icon" href="/content/images/logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->

    @include('admin.layouts.partial.css')

</head>

<body>
    <!-- Page Preloader -->
    <div class="wrapper">
        <nav id="sidebar" class="active">
            @include('admin.layouts.partial.sidebar')
          
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            @include('admin.layouts.partial.nav-body')

            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.partial.js')

</body>

</html>