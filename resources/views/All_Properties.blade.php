@include('header')
<body class="">
    @include('nav')
  
   <div class=" bg-properties">
    <div class="  container"> 
                  <div class="d-flex justify-content-start "> 
                    <div> <p class="properties">list of properties</p></div>
                   <!-- <div class="d-flex algin-items-center"><button class="btn-view">View All Properties</button></div> -->
                  </div>



       <div class="row mx-auto ">
          @foreach($appartements as $appartement)
      <div class="col-md-6 col-lg-4 p-2 col-12" href="#modal-meal" data-bs-toggle="modal" >
            <div class="card border-0 rounded-4 bg-light  shadow-lg  rounded">
              @foreach ($appartement->images as $image)
            <a href="properties"><img src="{{asset('storage/image/'.$image->image)}}" class="card-img-top" > </a> 
            @endforeach;
            <div class="card-body text-center">
              <h5 class="card-title fw-bold text-dark">{{$appartement->name}}</h5>
              <p class="mb-2 items-center text-dark" ><i class="fa-solid fa-location-dot"></i>  {{$appartement->localisation->city->name}},{{$appartement->localisation->localisation}}</p>
              <p class="card-text text-success">MAD{{$appartement->prix}}</p>
              <hr class="my-1" />
              <p class="fw-bold text-dark">Status : {{$appartement->status}}</p>
              <p class="text-dark"><span class="fw-bold text-dark">Date :</span>{{$appartement->date}}</p>
            </div>    
            @endforeach;
          </div>
        </div> 


       
      



          
     </div>
  </div>
  </div></a> 
    



    @include('footer')
</body>
</html>