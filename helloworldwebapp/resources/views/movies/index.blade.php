@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Movie List!</h1>
        <p>May the Force be with you.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <h2 class="sub-header">Awesome movies</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Movie</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
              <th>Header</th>
            </tr>
          </thead>
          <tbody>
            @foreach($movies as $movie)
            <tr>
              <td>{{ $movie->name }}</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
            </tr>

            @endforeach


          </tbody>
        </table>
      </div>



    <!-- TODO: Current Tasks -->
@endsection
