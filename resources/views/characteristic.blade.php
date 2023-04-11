
<x-app-layout>
    <x-slot name="header">
        @include('header')
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
</x-slot>

   
</x-app-layout>