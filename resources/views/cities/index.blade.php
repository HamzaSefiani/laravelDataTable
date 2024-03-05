@extends('layouts.app')


@section('content')

<h3 style="color:salmon">Pays : {{$country->name}}</h3>

<table id="cities-table" class="table  table-bordered  data-table">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
<script type="text/javascript">
        $(document).ready(function() {
            $('.data-table').DataTable(); // Initialise la DataTable pour le tableau des villes
        }).on('click', 'tr:not(:first-child)', function () { //Ajoute un gestionnaire de clic sur les lignes du tableau sauf la premier ligne
        var cityId = $(this).find('td:first').text(); 
       
        window.location.href = "people/"+cityId;  // Redirige vers la route pour afficher les personnes de la ville
    });
    </script>
@endsection

