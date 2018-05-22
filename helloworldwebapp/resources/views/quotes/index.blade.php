@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Quotes</h1>
        <p>May the Force be with you. New Version</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">More &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <h2 class="sub-header"></h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Sayer</th>
              <th>Said</th>

            </tr>
          </thead>
          <tbody>
            @foreach($quotes as $quote)
            <tr>
              <td>{{ $quote->name }}</td>
              <td>{{ $quote->message }}</td>


            </tr>

            @endforeach


          </tbody>
        </table>
      </div>



    <!-- TODO: Current Tasks -->
@endsection
