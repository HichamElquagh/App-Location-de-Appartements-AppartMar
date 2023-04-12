
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