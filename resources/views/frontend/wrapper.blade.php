{{-- Attach our header --}}
@include("frontend.partials.header")

{{-- Dynamic body view file --}}
@isset($body)
    @include($body)
@endisset

{{-- Attach our footer --}}
@include("frontend.partials.footer")