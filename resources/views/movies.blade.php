@extends('layouts.main')

@section('content')
   
 <div class="container">
  
    @foreach ($movies as $movies)
        <tr>
            <th scope="row">{{ $movies->title }}</th>
        </tr>
    @endforeach
  
 </div>
@endsection