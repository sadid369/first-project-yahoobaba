@php
    // $fruits = ['apple', 'banana', 'orange', 'grabe', 'pineapple', 'mango', 'strawberry'];
    $fruits = ['one' => 'apple', 'two' => 'Banana', 'three' => 'Organge', 'three' => 'Organge'];
    // $fruits = [];
    $value = 'h';
@endphp
@includeUnless(empty($value), 'pages.header', ['fruits' => $fruits])

<h1>Home Page</h1>

@include('pages.footer')

@includeIf('pages.content')
