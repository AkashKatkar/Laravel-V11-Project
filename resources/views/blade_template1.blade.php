@extends("layout")

@section("title")
    Beginner
@endsection

@section("content")
    @isset($from)
        <h1 class="text-center">{{ $from }}</h1>
    @endisset
    <a href="{{ route("route_page") }}">Redirect to routing page</a>

    {{-- Set variable and Print string, variables, html tags --}}
    {!! "<br><br>" !!}
    {{ "Hello Akash" }}
    {!! "<br><br>" !!}
    @php $abc="Akash"; @endphp {{-- Defined variable --}}
    {{ "Variable : ".$abc }}
    {!! "<br><br>" !!}

    {{-- If statement --}}
    @if($abc == "")
        {{ "If condition : " . $abc }}
    @else
        {{ "Else : " . $abc }}
    @endif

    {!! "<br><br>" !!}

    {{-- Switch statement --}}
    @switch($abc)
        @case("A")
            {{ "A1" }}
            @break
        @case("Akash")
            {{ "A2" }}
            @break
        @default
            {{ "Default value" }}
            @break
    @endswitch

    {!! "<br><br>" !!}

    {{-- ISSET function --}}
    @isset($abc)
        {{ "Print isset value : $abc" }}
    @endisset

    {!! "<br><br>" !!}

    {{-- EMPTY function --}}
    @php $empty_var = null; @endphp
    @empty($empty_var)
        {{ "Print empty var : " . $empty_var }}
    @endempty

    {!! "<br><br>" !!}
    {{-- FOR LOOP --}}
    @for($a=0; $a < 2; $a++)
        {{ $a }} {!! "<br>" !!}
    @endfor

    {!! "<br><br>" !!}
    {{-- FOREACH LOOP --}}
    @php $arr = ["A", "B", "C", "D"]; @endphp
    @foreach($arr as $a)
        @if($a == "B")
            @continue
        @endif
        {{ $a }} {!!"<br>"!!}
    @endforeach

    {!! "<br><br>" !!}
    {{-- WHILE LOOP --}}
    @php $a = 0 @endphp
    @while(isset($arr[$a]))
        @if($arr[$a] == "C")
            @break
        @endif
        {{ $arr[$a++] }} {!! "<br>" !!}
    @endwhile

    {!! "<br><br>" !!}
    {{-- FORELSE LOOP --}}
    @php $arr1 = []; @endphp
    @forelse($arr1 as $a)
        {{ $a }} {!! "<br>" !!}
    @empty
        {{ "Empty Value" }} {!! "<br>" !!}
    @endforelse

    {!! "<br><br>" !!}

    {{-- Blade loop variables for @foreach loop --}}
    @foreach($arr as $a)
        {!! $loop->index ." ". $a . "<br>" !!}
    @endforeach
    {!! "<br>" !!}
    @foreach($arr as $a)
        {!! $loop->iteration ." ". $a . "<br>" !!}
    @endforeach
    {!! "<br>" !!}
    @foreach($arr as $a)
        {!! $loop->remaining ." ". $a . "<br>" !!}
    @endforeach
    {!! "<br>" !!}
    @foreach($arr as $a)
        {!! $loop->count ." ". $a . "<br>" !!}
    @endforeach
    {!! "<br>" !!}
    @foreach($arr as $a)
        @if($loop->first)
            <span style="color: #F05969;">{!!$a."<br>"!!}</span>
        @elseif($loop->last)
            <span style="color: #4810f0;">{!!$a."<br>"!!}</span>
        @else
            {{ $a }} {!!"<br>"!!}
        @endif
    @endforeach
    {!! "<br>" !!}
    @foreach($arr as $a)
        @if($loop->even)
            <span style="color: #F05969;">{!!$a."<br>"!!}</span>
        @elseif($loop->odd)
            <span style="color: #4810f0;">{!!$a."<br>"!!}</span>
        @endif
    @endforeach
@endsection
