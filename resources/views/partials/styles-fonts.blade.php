<!--Dynamic Page styles-->

<style>
    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 400
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Regular_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 400
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 700
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Bold_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 700
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 600
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Semibold_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 600
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light.ttf') }}) format('truetype');
        font-style: normal;
        font-weight: 300
    }

    @font-face {
        font-family: 'Proxima Nova';
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light_Italic.ttf') }});
        src: url({{ asset('assets/fonts/Proxima-Nova/Proxima_Nova_Light_Italic.ttf') }}) format('truetype');
        font-style: italic;
        font-weight: 300
    }
</style>

<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.min.css?v=2.0') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

@if( isset($styles) )
    {!! $styles !!}
@endif
<style>
    @if( isset($xcss) )
        {{ $xcss }}
    @endif
</style>