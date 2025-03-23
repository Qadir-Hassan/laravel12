@extends('layouts.masterlayout')

@section('content')
    <h1>Form</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- {{ route('form.process') }} --}}
    <form method="POST" action="{{ route('form.process') }} " enctype="multipart/form-data" style="margin-left: 50%">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>

    

        <button type="submit">Submit</button>
    </form>

    @endsection