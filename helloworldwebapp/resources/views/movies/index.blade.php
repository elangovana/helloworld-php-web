<ul>
    @foreach($movies as $movie)
        <li>{{ $movie->name }}</li>
    @endforeach
</ul>
