@extends('layouts.app')


@section('content')

<h3 style="color:salmon">Ville : {{$city->name}}</h3>

<table id="cities-table" class="table  table-bordered  data-table">
        <thead> 
            <tr>
                <th>ID</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
<script type="text/javascript">
        $(document).ready(function() {
            $('.data-table').DataTable();
        })
    </script>
@endsection

