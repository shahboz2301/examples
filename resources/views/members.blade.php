
@extends('app')  //bu app.blade.php faylidagi kodlarni ko'chirib olyapdi

@section('title', 'Bu jamoa azolari sahifasi') //bu saytda boshqa saxifa ochilishini taminlaydi

@section('content') //bular esa


  <h2> bu members sahifasi </h2>

   <ul>
     @forelse($members as $member)
        <li>{{$member}}</li>
        @empty
         Hech qanday jamoa azolari mavjud emas
      @endforelse
   </ul>

@endsection
