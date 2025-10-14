@props(['title' => "", "csClass" => ""])
<!doctype html>
<html lang="en">
<x-head title="{{$title}}"/>
<body @isset($csClass) class="{{$csClass}}@endisset">
{{ $slot }}
<x-script/>
</body>
</html>