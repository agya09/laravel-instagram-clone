@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-4 ml-5">
            <img src="https://images.pexels.com/photos/704569/pexels-photo-704569.jpeg?cs=srgb&dl=pexels-daria-shevtsova-704569.jpg&fm=jpg" style="height: 150px; width:150px;"class="rounded-circle" alt="">
       </div>
       <div class="col-7 p-4 ">
       <!-- {{ $user->username }} -->
            <div><h1>hello</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>10</strong> posts</div>
                <div class="pr-5"><strong>100</strong> followers</div>
                <div class="pr-5"><strong>10</strong> following</div>
            </div>
            <div class="pt-3 font-weight-bold">pathakagya.com</div>
            <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio dolorum veritatis odit ipsam explicabo officia earum adipisci ratione at provident perspiciatis nam mollitia, nobis, dolorem, vitae asperiores minima! Explicabo, iusto.</div>
            <div><a href="www.insta.com">agya_pathak</a></div>
       </div>
   </div>
   <div class="row pt-5">
       <div class="col-4">
            <img src="img/test.jpg" alt="" class="w-100 h-50">
       </div>
       <div class="col-4">
            <img src="img/test.jpg" alt="" class="w-100 h-50">
       </div>
       <div class="col-4">
            <img src="img/test.jpg" alt=""class="w-100 h-50">
       </div>
   </div>
</div>
@endsection
