<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layout.meta')
    <title>{{ config('name') }}</title>
    @include('layout.styles')
    @include('layout.head-scripts')
</head>
<body id="page-top">
    @yield('body')
    @include('layout.body-scripts')
    <script>
        axios.post('/api/ui', {
        })
            .then(function (response) {
                response.forEach(function (ele) {
                    $('#'+ele.target).html(ele.val);
                })
            })
            .catch(function (error) {
                console.log(error);
            });
    </script>
</body>
</html>
