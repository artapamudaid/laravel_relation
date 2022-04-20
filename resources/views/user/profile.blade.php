<h1> Hallo {{ $user->name }}</h1>
<p>No. Passport : {{ $user->passport->no_pass }}</p>

<h3>Daftar Forum</h3>
<ul>
    @foreach ($user->forums as $forum)
    <li>
        {{ $forum->title }}
        || tags :
        @foreach ($forum->tags as $tag)
        {{ $tag->name }}
        @endforeach
    </li>
    @endforeach
</ul>
{{-- with builder --}}
{{-- <ul>
    @foreach ($user->forums()->has('tags')->get() as $forum)
    <li>
        {{ $forum->title }}
        || tags :
        @foreach ($forum->tags as $tag)
        {{ $tag->name }}
        @endforeach
    </li>
    @endforeach
</ul> --}}

<h3>Daftar Kelas</h3>
<ul>
    @foreach ($user->lessons as $lesson)
    <li>
        {{ $lesson->title }}
        || tags :
        @foreach ($lesson->tags as $tag)
        {{ $tag->name }}
        @endforeach
    </li>
    @endforeach
</ul>

@foreach ($forums as $forum)
{{ $forum->name }} : {{ $forum->forums_count }} <br>
@endforeach