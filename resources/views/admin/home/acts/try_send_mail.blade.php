@extends('adm_theme::layouts.app')
@section('content')
    <x-col size="12">
            <form action="{!! Request::fullUrlWithQuery([]) !!}" method="POST">
                @csrf
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> b3b016d (up)
=======
>>>>>>> a758bd5 (.)

                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />

                <x-input.group type="text" name="to" value="marco.sottana@gmail.com" />

                <x-input.group type="text" name="body" value="invio mail di test" />
                {{--
                <x-input.group type="select" name="engine" :options="$options"/>
                --}}
                <x-input.group type="select" name="template" :options="$template_options"/>

                <x-input.group type="select" name="mailer" :options="$mailer_options"/>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />
                
<<<<<<< HEAD
                <x-input.group type="text" name="to" />

                <x-input.group type="wysiwyg" name="body" />
>>>>>>> e3e9786 (.)
=======
=======

                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />

>>>>>>> 602db11 (up)
                <x-input.group type="text" name="to" value="marco.sottana@gmail.com" />
>>>>>>> 7616aad (up)

=======
                
                <x-input.group type="text" name="subject" value="mail test" />

                <x-input.group type="text" name="from" value="staff@example.com" />
                
                <x-input.group type="text" name="to" value="marco.sottana@gmail.com" />

>>>>>>> 478bb60 (up)
                <x-input.group type="text" name="body" value="invio mail di test" />
                {{--
                <x-input.group type="select" name="engine" :options="$options"/>
                --}}
                <x-input.group type="select" name="template" :options="$template_options"/>
<<<<<<< HEAD

                <x-input.group type="select" name="mailer" :options="$mailer_options"/>
=======
>>>>>>> fe06862 (.)
=======
>>>>>>> 478bb60 (up)
=======
>>>>>>> 8072a08 (up)
=======
>>>>>>> a758bd5 (.)

                <button class="btn btn-primary" type="submit">go!</button>

            </form>
    </x-col>
@endsection