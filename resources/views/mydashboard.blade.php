@include('header')

<body class="">
<x-app-layout>
    <x-slot name="header">
        <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <!-- <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div> -->

            <ul class="list-unstyled components d-flex flex-column justify-content-around h-50">
                <p>MarAppart</p>
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

                    
                  <button type="button" id="sidebarCollapse" class="btn btn-light d-flex justify-content-end ">
                        <i class="text-dark fas fa-align-left"></i>
                    </button>
                      <!-- statistique card -->
                      @include('statistique')
                      <!--  -->


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
                                            <th scope="col">Localisation</th>
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
                                            <td><img src="" alt="" srcset=""></td>
                                            <td></td>
                                            <td>{{$appartement->description}}</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                            <td>Member</td>
                                            <td>Member</td> 
                                        </tr>
                                      @endforeach;
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- second table  -->
             

                    <div class="col-12">
                        <div class="bg-light rounded  h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
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

                    <!-- three table -->

                    <div class="col-12">
                        <div class="bg-light rounded  h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
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
          <label for="recipient-name" class="col-form-label" for="ville">Sélectionnez votre ville</label>
          <div class="form-group w-100">
            <select class="selectpicker w-100" name="city" data-live-search="true">
                <option selected>Sélectionnez </option>  
                @foreach($cities as $city)
              <option value="{{$city->id}}">{{$city->city}}</option>  
              @endforeach; 
            </select>
        </div> 
        
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
        <button type="" class="btn btn-primary" name="save" >Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
{{-- rechrche citei--}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>       
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> --}}
    <!-- side barr  -->
    <script>$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});</script>
</x-slot>

   
</x-app-layout>
</body>


</html>
