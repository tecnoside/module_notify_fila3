@extends('adm_theme::layouts.app')
@section('content')
    <x-col size="12">
            <form action="{!! Request::fullUrlWithQuery([]) !!}" method="POST">
                @csrf
                
                <x-input.group type="text" name="subject" />

                <x-input.group type="text" name="from" />
                
                <x-input.group type="text" name="to" />

                <x-input.group type="wysiwyg" name="body" />

                <x-input.group type="select" name="engine" :options="$options"/>

                <button class="btn btn-primary" type="submit">go!</button>

            </form>
    </x-col>
@endsection