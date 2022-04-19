<h1> Hallo {{ $user->name }}</h1>
<p>No. Passport : {{ $user->passport->no_pass }}</p>

<h3>Daftar Forum</h3>
<ul>
    @foreach ($user->forums as $forum)
    <li>{{ $forum->title }}</li>
    @endforeach
</ul>