@extends('layouts.app')

<!-- @section('title', 'Laravel 8 Datatables Tutorial - ItSolutionStuff.com') -->

@section('content')
<table class="table table-bordered data-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Country</th>
        </tr>
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
    }).on('click', 'tr:not(:first-child)', function () {
        var countryId = $(this).find('td:first').text(); // Get the country ID from the first column of the row
       
        // Redirect to the cities route with the country ID
        window.location.href = "cities/"+countryId;
    });
    
  });
</script>
@endsection
