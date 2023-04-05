<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>user</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    @include('user.layout.styles')

    @include('user.layout.scripts')

</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('user.layout.nav')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1> </h1>
                    {{-- <div class="ml-auto">
                        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                    </div> --}}
                </div>


            </section>
        </div>

    </div>
</div>
@include('user.layout.footer')
@include('user.layout.scripts_footer')

</body>
</html>