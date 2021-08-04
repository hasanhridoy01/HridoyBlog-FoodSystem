<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-html.dreamguystech.com/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 16:16:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin | Template</title>

    @include('admin/layouts/partials/style')

</head>

<body>
    <div class="main-wrapper">
    
        <!-- Header -->
        @include('admin/layouts/head')
        <!-- /Header -->
        
        <!-- Sidebar/Menu -->
        @include('admin/layouts/menu')
        <!-- Sidebar/Menu -->
        
        {{-- Main-Content --}}
        @section('main-content')
        @show
        {{-- Main-Content --}}

    </div>

   @include('admin/layouts/partials/script')

</body>


<!-- Mirrored from truelysell-html.dreamguystech.com/template/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 16:17:10 GMT -->
</html>