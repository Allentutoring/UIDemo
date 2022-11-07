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
        const URLSearch = new URLSearchParams(location.search);
        let lang = URLSearch.get('lang') ?? 'kr';
        axios({
            url: '{{ route('api.ui') }}',
            method: 'post',
            data: {
                code: window.location.pathname,
                lang: lang,
            },
        }).then(function (response) {
            response.data.data.forEach(function (element) {
                let tag = $(element.target);
                element.group.forEach(function (group) {
                    group.forEach(function (behavior) {
                        if (behavior.attribute == 'text') {
                            tag.text(behavior.value);
                        } else if (behavior.attribute == 'html') {
                            tag.html(behavior.value);
                        } else {
                            tag.attr(behavior.attribute, behavior.value);
                        }
                    });
                });
            });
        });
    });
</script>
</body>
</html>
