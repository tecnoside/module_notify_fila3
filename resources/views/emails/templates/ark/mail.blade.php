@extends('notify::emails.templates.ark')

@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    {{--
=======
>>>>>>> 3405de3 (up)
=======
    {{--
>>>>>>> 13855c4 (up)
=======
    {{--
>>>>>>> fe06862 (.)
=======
>>>>>>> 4aa3b2a (up)
=======
    {{--
>>>>>>> 6365d48 (up)
=======
    {{--
>>>>>>> a758bd5 (.)
    @include('notify::emails.templates.ark.heading', [
		'heading' => $subject,
		'level' => 'h1'
	])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    --}}
=======
>>>>>>> 3405de3 (up)
=======
    --}}
>>>>>>> 13855c4 (up)
=======
    --}}
>>>>>>> fe06862 (.)
=======
>>>>>>> 4aa3b2a (up)
=======
    --}}
>>>>>>> 6365d48 (up)
=======
    --}}
>>>>>>> a758bd5 (.)

    @include('notify::emails.templates.ark.contentStart')
        {!! $html !!}
    @include('notify::emails.templates.ark.contentEnd')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 3405de3 (up)
=======

>>>>>>> 602db11 (up)
=======

>>>>>>> fe06862 (.)
=======
    
>>>>>>> 4aa3b2a (up)
=======

>>>>>>> b3b016d (up)
=======

>>>>>>> a758bd5 (.)

@stop