<x-main-layout>

  {{-- header --}}
  <x-site.header />

  {{-- start info section --}}
  <x-site.info :$page />


  {{-- about section --}}
  <x-site.about :$advantages :$page :$builds />

  {{-- main section --}}
  <x-site.main :$page :$components />

  {{-- <x-site.service :$services :$components /> --}}

  {{-- bye bye section --}}
  <x-site.bye-bye />

  {{-- footer --}}
  <x-site.footer />

</x-main-layout>
