
<x-app-layout>
    @include('header')
      <x-slot name="header">







        <body>

            <div class="main-wrapper container">
        
                
        
        
                <!-- sidebar section -->
                {{-- @include('dashboard.sidebar') --}}
        
        
                <div class="page-wrapper">
                    <div class="content container-fluid">
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title mt-5">Edit Properties</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row formtype">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Properties Name</label>
                                                <input class="form-control @error('nameR') is-invalid  @enderror" type="text" name="nameR"  value="">
                                            </div>
                                        </div>
        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Room Categorie</label>
                                                <select class="form-control @error('categorie_id') is-invalid  @enderror" id="sel1" name="categorie_id">
                                                    <option disabled selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
        
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Statut Room</label>
                                                <input type="checkbox" id="statutR" name="statutR" value="1" checked>
                                                <select class="form-control" id="sel2" name="statutR">
                                                    <option disabled selected>Open this select menu</option>
                                                    <option>AC</option>
                                                    <option>NON-AC</option>
                                                </select>
                                            </div>
                                        </div> --> --}}
        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Number Of Beds </label>
                                                <select class="form-control" id="sel" name="numberBed">
                                                    <option disabled selected>Open this select menu</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                        </div>
        
        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Price Room</label>
                                                <input type="number" class="form-control" id="priceR" name="priceR"  value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Picture Room</label>
                                                <div class="custom-file mb-3">
                                                    <input type="file" class="custom-file-input" id="customFile" name="pictureR">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Room description</label>
                                                <textarea class="form-control" rows="5" id="description" name="descriptionR"></textarea>
        
                                            </div>
                                        </div>
        
                                        <!-- add relation with facilitie?? -->
                                        <div class="col-md-12">
                                            <label class="form-label">Facilities </label>
                                            <div class="row">
                                                {{-- @foreach($facilities as $facilitie) --}}
                                                <div class="col-md-3 mb-1">
                                                    <label for="">
                                                        <input class="form-check-input shadow-none" name="facilities[]" type="checkbox" value="" id="flexCheckDefault">
                                                        
                                                    </label>
                                                </div>
                                                {{-- @endforeach --}}
                                            </div>
        
                                        </div>
        
                                    </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary buttonedit ml-2">Save</button>
                        <button type="button" class="btn btn-primary buttonedit">Cancel</button>
                    </div>
                    </form>
                </div>
        
            </div>
        
        
            
        </body>
        
        </html>









       </x-slot>
</x-app-layout> 


