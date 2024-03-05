@extends('layouts.app')

@section('content')
<table class="table table-bordered data-table">
    <thead>
            <th>No</th>
            <th>Pays</th>
    </thead>
    <tbody>
    </tbody>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('countries.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
        ],
    }).on('click', 'tbody tr', function () {
        var countryId = $(this).find('td:first').text(); // Get the country id
       
        // Redirect to the cities route with the country id
        window.location.href = "cities/"+countryId;
    });
    
  });
</script>
@endsection
