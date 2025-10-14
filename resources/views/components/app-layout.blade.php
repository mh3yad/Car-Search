@props(['title' => "", "footerLinks" => ""])
<x-base-layout :$title>
    <x-header/>

    {{ $slot }}
    <footer>
        <a href="#">link 1</a>
        <a href="#">link 2</a>
        {{ $footerLinks }}
    </footer>
</x-base-layout>