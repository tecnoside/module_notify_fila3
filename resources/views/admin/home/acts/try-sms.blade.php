@extends('adm_theme::layouts.app')
@section('content')
<<<<<<< HEAD
<<<<<<< HEAD

    <x-col size="12">

            <form action="{!! Request::fullUrlWithQuery([]) !!}" method="POST">
                @csrf
                <x-input.group type="select" name="driver" value="{{ $driver }}" :options="$drivers" />

=======
=======
>>>>>>> fe06862 (.)
    
    <x-col size="12">
        
            <form action="{!! Request::fullUrlWithQuery([]) !!}" method="POST">
                @csrf
                <x-input.group type="select" name="driver" value="{{ $driver }}" :options="$drivers" />
                
<<<<<<< HEAD
>>>>>>> aa57784 (up)
=======
>>>>>>> fe06862 (.)
                <x-input.group type="text" name="from" />
                <x-input.group type="text" name="to" value="3475896127" />

                txt:
                <textarea name="body" class="form-control"></textarea>

                <input type="submit" value="go!" class="btn btn-primary" />

            </form>
<<<<<<< HEAD
<<<<<<< HEAD


=======
        
        
>>>>>>> aa57784 (up)
=======
        
        
>>>>>>> fe06862 (.)
    </x-col>
@endsection
