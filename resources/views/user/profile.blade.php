<h1> Hallo {{ $user->name }}</h1>
<p>No. Passport : {{ $user->passport->no_pass }}</p>

<h3>Daftar Forum</h3>
<ul>
    @foreach ($user->forums as $forum)
    <li>{{ $forum->title }}</li>
    @endforeach
</ul>

<h3>Daftar Kelas</h3>
<ul>
    @foreach ($user->lessons as $lesson)
    <li>{{ $lesson->title }}</li>
    @endforeach
</ul>