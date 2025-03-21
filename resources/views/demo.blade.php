@includeif('welcomep');
<h1>Home page</h1>

{{5 + 2}}

<br><br>
{{"Hello world"}}
<br><br>
{{"<h1>Hello world</h1>"}}
{!! "<h1>Hello world</h1>" !!}
{!! "<script>alert('Script call')</script>" !!}

@php
    $user = "Abdul sami";
@endphp
{{$user}}
@{{$user}}


@php
    $names = ["Salman","Subhan","Ahmed"];
@endphp

<ul>
    @foreach ($names as $item)
   
    <li>{{$loop->iteration}} - {{$item}}</li>

       
    @endforeach

    @foreach ($names as $item)
      @if($loop->first)
        <li style="color: red">{{$item}}</li>
    @else
    <li>{{$item}}</li>
    @endif



    @endforeach

    @foreach ($names as $item)
      @if($loop->first)
        <li style="color: red">{{$item}}</li>
    @elseif($loop->last)
    <li style="color: green">{{$item}}</li>
    @else
    <li>{{$item}}</li>
    @endif
    @endforeach
</ul>
