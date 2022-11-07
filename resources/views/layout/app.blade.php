<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layout.meta')
    <title>{{ config('name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
    @include('layout.styles')
    @include('layout.head-scripts')
</head>
<body id="page-top">
@yield('body')
@include('layout.body-scripts')
<script>
    $(function () {
        axios({
            url: '{{ route('api.ui') }}',
            method: 'post',
            data: {
                key: '/render',
                lang: 'kr',
            },
        }).then(function (response) {
            response.data.data.forEach(function (item) {
                let tag = $(item.target);
                console.log(tag);
                console.log(tag.prop('tagName'));
            });
        });
    });
</script>
</body>
</html>
