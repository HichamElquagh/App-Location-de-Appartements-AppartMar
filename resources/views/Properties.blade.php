
@include('header')
@include('nav')
<body>
  <body>

     
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-6 ">
          @foreach ($appartement->images as $image)
          <img src="{{asset('storage/image/'.$image->image)}}" class="img-fluid rounded " alt="Appartement">
          @endforeach;
        </div>
        <div class="col-md-5 col  d-flex flex-column justify-content-center ">
          <div class=" d-flex flex-column  ">
            <h1>{{$appartement->name}}</h1>
            <p>{{$appartement->description}}</p>
            <h2>Détails de l'appartement</h2>
            <ul>
              <li>{{$appartement->person_nombre}}</li>
              <li>Nombre de chambre : {{$appartement->no_chambre}} </li>
              <li> space: {{$appartement->space}}</li>
              <li><i class="fa-solid fa-location-dot"></i>  {{$appartement->localisation->city->name}},{{$appartement->localisation->localisation}}</li>
            </ul>
            <h2>Prix</h2>
            <p>Le loyer journalier est de {{$appartement->prix}} MAD.</p>
          </div>
          <div>
            <div class="card border-0 col-md-10   rounded-4 bg-light shadow-lg rounded mt-5">
              <div class="card-body">
                <h2>Réserver maintenant</h2>
                <form>
                  <div class="form-group my-3">
                    <label for="checkin">Date d'arrivée:</label>
                    <input type="date" class="form-control" id="checkin">
                  </div>
                  <div class="form-group my-3">
                    <label for="checkout">Date de départ:</label>
                    <input type="date" class="form-control" id="checkout">
                  </div>
                  <div class="form-group my-3">
                    <label for="guests">Nombre d'invités:</label>
                    <select class="form-control" id="guests">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Réserver</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </body>