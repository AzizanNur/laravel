<!DOCTYPE html>

<html lang="en">
<head>
    @include('template.head');
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper mb-5">
@include('template.navbar');
@include('template.left-sidebar')

<div class="content-wrapper" id="app">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <example-component></example-component>               
            </div>
        </div>
    </div>
</div>

{{-- @include('template.footer') --}}
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
