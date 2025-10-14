@props(['company' => '404'])
<button
        class="btn btn-default flex justify-center items-center gap-1"
>
    <img src="/img/{{$company}}.png" alt="" style="width: 20px" />
    {{$company}}
</button>