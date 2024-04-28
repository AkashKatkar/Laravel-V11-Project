@extends("layout")

@section("title")
    Intermediate
@endsection

@section("content")
    {{-- Blade template main directives - [[ INCLUDE ]] --}}
    @include("blade_template1", ["from" => "Blade Template [Inter] File"])

    {{-- Check file exist or not --}}
    @includeIf("blade_template123", ["from" => "Blade Template [Unknown] File"])

    {{-- If first parameter is [true] then load data --}}
    @includeWhen(empty("A"), "blade_template3", ["from" => "Blade Template [Unknown] File"])

    {{-- If first parameter is [false] then load data --}}
    @includeUnless(empty(""), "blade_template3", ["from" => "Blade Template [Unknown] File"])
@endsection
