@extends('layouts.main')

@section('content')
<div id="mainImg" class="text-center">
     <img id="mainImg" src="{{ asset('img/1.jpg') }}" class="w-100" alt="">
</div>
<div id="barra-social" class="text-center ">
     <a href="https://www.instagram.com/dbasetarget/" target="new">
           <i class="fa-brands fa-instagram fa-3x text-warning iconoSocial "></i>
     </a>
     <a href="https://www.facebook.com/dbasetarget">
          <i class="fa-brands fa-facebook fa-3x text-white text-primary iconoSocial"></i>
     </a>
     <a class="cursor-pointer" onclick="compartirEnlace()" href="#">
          <i class="fa-solid fa-share-nodes fa-3x text-white text-success iconoSocial"></i>
     </a>
     <a href="https://twitter.com/DbaseTarget">
          <i class="fa-brands fa-twitter fa-3x text-white text-primary iconoSocial"></i>
     </a>
     <a href="https://www.youtube.com/embed/" target="new">
          <i class="fa-brands fa-youtube fa-3x text-white text-danger iconoSocial"></i>
     </a>
</div>
@endsection