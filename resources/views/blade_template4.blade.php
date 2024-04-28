@extends("layout")

@section("content")
    @php
        $str = "Akash";
        $arr = ["Car", "Bike", "Scooter", "Airoplane"];
    @endphp

    <script>
        var str_data = @json($str);
        var arr_data = @json($arr);
        console.log(str_data);
        console.log(arr_data);

        var array_data = {{ Js::from($arr) }};
        array_data.forEach((av)=>{
            console.log(av);
        });
    </script>

    {{-- Use for access Vue JS --}}
    @verbatim
        <div id="app">{{ message }}</div>
    @endverbatim
@endsection

@section("title")
    pro
@endsection

@push("scripts")
    <script src="test1.js"></script>
    <script src="test2.js"></script>
@endpush

@push("scripts")
    <script src="test3.js"></script>
@endpush

@push("styles")
    <link rel="stylesheet" href="test.css">
@endpush

{{-- Show stylesheet before "styles" stack --}}
@prepend("styles")
    <style>
        body{ background-color: #F05969; }
    </style>
@endprepend

{{-- Use for access Vue JS --}}
@push("scripts")
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const { createApp, ref } = Vue

        createApp({
          setup() {
            const message = ref('Hello vue!')
            return {
              message
            }
          }
        }).mount('#app')
    </script>
@endpush
