<!-- Main javascsript -->
<script src="{{ asset('assets/js/main.min.js?v=2.0') }}"></script>

<!--Custom script-->
<script>
    var baseUrl = "{{ url('/') }}/";
</script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!--Dynamic Page scripts-->

@if( isset($scripts) )
    {!! $scripts !!}
@endif

<script type="text/javascript">
    $(function ()  {
        @if( isset($xjs) )
        {!! $xjs !!}
        @endif
    });

    @if( session()->exists('kNotify') )
        {!! session('kNotify') !!}
    @endif

</script>

@yield ('scripts')
</body>
</html>