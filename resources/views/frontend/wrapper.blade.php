{{-- Attach our header --}}
@includeIf("frontend.partials.header")

{{-- Dynamic body view file --}}
@includeIf($body)

{{-- Attach our footer --}}
@includeIf("frontend.partials.footer")