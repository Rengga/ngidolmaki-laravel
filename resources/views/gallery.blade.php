@extends('utama')
@section('row')
    @foreach ($data as $item)
        <a href="{{$item->link}}"><img src="{{$item->image}}"></a>
    @endforeach

    
@endsection