@php
    $user = 'Yahoo Baba';
    $fruits = ['apple', 'banana', 'orange', 'grabe', 'pineapple', 'mango', 'strawberry'];
@endphp
<p class="para"></p>

<script>
    // var data = @json($fruits);
    var data = {{ Js::from($fruits) }};
    data.forEach((e) => {
        console.log(e);
    });

    const para = document.querySelector(".para");
    para.innerHTML = "Hi";
    console.log(data);
</script>
