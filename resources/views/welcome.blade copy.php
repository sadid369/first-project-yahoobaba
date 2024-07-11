{{-- <h1>Our First Page</h1>
<a href="{{ route('mypost') }}">Post Page</a>
<br>
<a href="{{ route('about') }}">About Page</a> --}}

{{ 5 + 6 }}



{{ 'Hello Wrold' }}

<br>

{!! '<h1>Hello Wrold</h1>' !!}

{{-- {!! "<script>alert('Yahoo Baba')</script>" !!} --}}

{{-- coomment --}}

@php
    // $name = 'Sadid';
    $name = ['Sadid', 'Onim', 'Zadid', 'Sadid', 'Onim', 'Zadid'];
@endphp
<div>

    @foreach ($name as $data)
        {{-- <h1>{{ $loop->index }}-{{ $data }}</h1> --}}
        {{-- <h1>{{ $loop->iteration }}-{{ $data }}</h1> --}}
        {{-- <h1>{{ $loop->count }}-{{ $data }}</h1> --}}
        @if ($loop->even)
            <li style="color: red">{{ $data }}</li>
        @elseif ($loop->odd)
            <li style="color: green">{{ $data }}</li>
        @else
            <li>{{ $data }}</li>
        @endif
    @endforeach
</div>
{{-- {{ $name }} --}}
