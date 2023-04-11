
 <!-- modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class=" modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Nom de l'appartement</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('appartement.store')}}" method="POST" id="form" enctype="multipart/form-data">
              @csrf
                
              <label for="recipient-name" class="col-form-label" >choisir votre Ville</label>
          <select class="form-select" aria-label="Default select example" name="city">
              @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>  
                @endforeach;  
          </select>
          
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Adresse</label>
              <input type="text" class="form-control" name="localisation" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Description </label>
              <textarea class="form-control" name="description" id="message-text"></textarea>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Image</label>
              <input type="file" class="form-control" name="images[]" multiple id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Prix</label>
              <input type="number" class="form-control" name="prix" id="recipient-name" step="0.01" min="0">
            </div>
           
          <label for="recipient-name" class="col-form-label" for="tags">Sélectionnez des Caracteristique:</label>
              <select class="form-select" aria-label="Default select example" name="caracteristique[]" id="tags" multiple>
                  @foreach($characteristics as $characteristic)
                  <option value="{{$characteristic->id}}">{{$characteristic->name}}</option>  
                  @endforeach; 
              </select>
              <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre de Chambre</label>
                  <input type="number" class="form-control" name="nombreChambre" id="recipient-name">
                </div>
              <label for="recipient-name" class="col-form-label" >Nombre de Personne</label>
          <select class="form-select" aria-label="Default select example" name="nombrePersonne">
              <option selected>Nombre de Personne</option>
              @foreach($persons as $person)
              <option value="{{$person->id}}">{{$person->person}}</option>  
              @endforeach;  
          </select>
                  <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Espaces</label>
              <input type="text" class="form-control" name="espaces" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Date</label>
              <input type="date" class="form-control" name="date" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save" >Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>








  <div class="col-12">
    <div class="bg-light rounded  h-100 p-4">
        <div class=" d-flex justify-content-between ">
            <div><h6 class="mb-4">Responsive Table</h6></div>
            <div><button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add properites</button></div>
        </div>
        <div class="table-responsive">
            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Localisation</th>
                        <th scope="col">City</th>
                        <th scope="col">Description</th>
                        <th scope="col">Nombre de Personne</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Espaces</th>
                        <th scope="col">Caracteristique</th>
                        <th scope="col">Date</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($appartements as $appartement)
                    <tr>
                        <th scope="row">1</th>
                        @foreach ($appartement->images as $image)
                        <td> <img src="{{ asset('storage/image/'.$image->image) }}" height="50" width="50"  alt=""></td>
                        @endforeach
                        <td>{{$appartement->status}}</td>
                        <td></td>
                        <td>Member</td> 
                        <td>{{$appartement->description}}</td>
                        <td>Member</td> 
                        <td>{{$appartement->prix}}</td>
                        <td>{{$appartement->space}}</td>
                        {{-- @foreach ($appartement->characteristics as $characteristic)
                        <td> {{$characteristic->name}}</td>
                        @endforeach  --}}
                        <td> <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Characteristic
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                     @foreach ($appartement->characteristics as $characteristic)
                                     <li>{{$characteristic->name}}</li>
                                     @endforeach
                                    </ul>
                                </div>
                              </div>
                            </div>
                        </div></td>
                        <td>{{$appartement->date}}</td>
                    </tr>
                  @endforeach;
                </tbody>
            </table>
        </div>
    </div>
</div>





















@include('header')
@include('nav')
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"> -->
                <div class="container-fluid">
                    <button class="btn btn-light" id="sidebarToggle"> <i class="text-dark fas fa-align-left"></i></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                   


                    @include('statistique');
                   
                </div>
         



                <div class="col-12">
                  <div class="bg-light rounded  h-100 p-4">
                      <div class=" d-flex justify-content-between ">
                          <div><h6 class="mb-4">Responsive Table</h6></div>
                          <div><button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add properites</button></div>
                      </div>
                      <div class="table-responsive">
                          <table class="table  table-striped">
                              <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Localisation</th>
                                      <th scope="col">City</th>
                                      <th scope="col">Description</th>
                                      <th scope="col">Nombre de Personne</th>
                                      <th scope="col">Prix</th>
                                      <th scope="col">Espaces</th>
                                      <th scope="col">Caracteristique</th>
                                      <th scope="col">Date</th>
                                      </tr>
                              </thead>
                              <tbody>
                                  @foreach($appartements as $appartement)
                                  <tr>
                                      <th scope="row">1</th>
                                      @foreach ($appartement->images as $image)
                                      <td> <img src="{{ asset('storage/image/'.$image->image) }}" height="50" width="50"  alt=""></td>
                                      @endforeach
                                      <td>{{$appartement->status}}</td>
                                      <td></td>
                                      <td>Member</td> 
                                      <td>{{$appartement->description}}</td>
                                      <td>Member</td> 
                                      <td>{{$appartement->prix}}</td>
                                      <td>{{$appartement->space}}</td>
                                      {{-- @foreach ($appartement->characteristics as $characteristic)
                                      <td> {{$characteristic->name}}</td>
                                      @endforeach  --}}
                                      <td> <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->index}}" aria-expanded="false" aria-controls="collapseOne">
                                               Characteristic
                                              </button>
                                            </h2>
                                            <div id="collapse{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                              <div class="accordion-body">
                                                  <ul>
                                                   @foreach ($appartement->characteristics as $characteristic)
                                                   <li>{{$characteristic->name}}</li>
                                                   @endforeach
                                                  </ul>
                                              </div>
                                            </div>
                                          </div>
                                      </div></td>
                                      <td>{{$appartement->date}}</td>
                                  </tr>
                                @endforeach;
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            <div class="container-fluid">
                <div class="col-12">
                    <div class="bg-light rounded  h-100 p-4">
                        <div class=" d-flex justify-content-between ">
                            <div><h6 class="mb-4">characteristic</h6></div>
                            <div><button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModall" data-bs-whatever="@mdo">add characteristic</button></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Localisation</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Nombre de Personne</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Espaces</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                        <td>UK</td>
                                        <td>456</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                        <td>AU</td>
                                        <td>789</td>
                                        <td>Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="bg-light rounded  h-100 p-4">
                        <div class=" d-flex justify-content-between ">
                            <div><h6 class="mb-4">characteristic</h6></div>
                            <div><button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModall" data-bs-whatever="@mdo">add characteristic</button></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Localisation</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Nombre de Personne</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Espaces</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                        <td>UK</td>
                                        <td>456</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                        <td>AU</td>
                                        <td>789</td>
                                        <td>Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- form --}}


     <!-- modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content ">
          <div class=" modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nom de l'appartement</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{route('appartement.store')}}" method="POST" id="form" enctype="multipart/form-data">
                @csrf
                  
                <label for="recipient-name" class="col-form-label" >choisir votre Ville</label>
            <select class="form-select" aria-label="Default select example" name="city">
                @foreach($cities as $city)
                  <option value="{{$city->id}}">{{$city->name}}</option>  
                  @endforeach;  
            </select>
            
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Adresse</label>
                <input type="text" class="form-control" name="localisation" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Description </label>
                <textarea class="form-control" name="description" id="message-text"></textarea>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Image</label>
                <input type="file" class="form-control" name="images[]" multiple id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Prix</label>
                <input type="number" class="form-control" name="prix" id="recipient-name" step="0.01" min="0">
              </div>
             
            <label for="recipient-name" class="col-form-label" for="tags">Sélectionnez des Caracteristique:</label>
                <select class="form-select" aria-label="Default select example" name="caracteristique[]" id="tags" multiple>
                    @foreach($characteristics as $characteristic)
                    <option value="{{$characteristic->id}}">{{$characteristic->name}}</option>  
                    @endforeach; 
                </select>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nombre de Chambre</label>
                    <input type="number" class="form-control" name="nombreChambre" id="recipient-name">
                  </div>
                <label for="recipient-name" class="col-form-label" >Nombre de Personne</label>
            <select class="form-select" aria-label="Default select example" name="nombrePersonne">
                <option selected>Nombre de Personne</option>
                @foreach($persons as $person)
                <option value="{{$person->id}}">{{$person->person}}</option>  
                @endforeach;  
            </select>
                    <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Espaces</label>
                <input type="text" class="form-control" name="espaces" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Date</label>
                <input type="date" class="form-control" name="date" id="recipient-name">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="save" >Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js\dash.js')}}"></script>
 
</body>
</html>