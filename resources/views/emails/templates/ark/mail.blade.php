@extends('notify::emails.templates.ark')

@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
    {{--
=======
>>>>>>> 3405de3 (up)
=======
    {{--
>>>>>>> 13855c4 (up)
    @include('notify::emails.templates.ark.heading', [
		'heading' => $subject,
		'level' => 'h1'
	])
<<<<<<< HEAD
<<<<<<< HEAD
    --}}
=======
>>>>>>> 3405de3 (up)
=======
    --}}
>>>>>>> 13855c4 (up)

    @include('notify::emails.templates.ark.contentStart')
        {!! $html !!}
    @include('notify::emails.templates.ark.contentEnd')

<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 3405de3 (up)
=======

>>>>>>> 602db11 (up)

@stop