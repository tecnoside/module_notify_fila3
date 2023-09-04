@extends('notify::emails.templates.ark')

@section('content')

<<<<<<< HEAD
    {{--
=======
>>>>>>> 3405de3 (up)
    @include('notify::emails.templates.ark.heading', [
		'heading' => $subject,
		'level' => 'h1'
	])
<<<<<<< HEAD
    --}}
=======
>>>>>>> 3405de3 (up)

    @include('notify::emails.templates.ark.contentStart')
        {!! $html !!}
    @include('notify::emails.templates.ark.contentEnd')

<<<<<<< HEAD

=======
    
>>>>>>> 3405de3 (up)

@stop