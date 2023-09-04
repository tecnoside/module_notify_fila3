@extends('adm_theme::layouts.app')
@section('content')
    <a class="btn btn-primary">+</a>
    <table class="table table-bordered">
<<<<<<< HEAD
<<<<<<< HEAD
    @foreach ($rows as $row)
=======
    @foreach($rows as $row)
>>>>>>> 0c3c98e (up)
=======
    @foreach($rows as $row)
>>>>>>> fe06862 (.)
        <tr>
            <td>{{ $row->id }}</td>

        </tr>
    @endforeach
    </table>
@endsection