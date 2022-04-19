<h1>Forum {{ $forum->title }}</h1>

<h3>Author : </h3>
<p>{{ $forum->user->name }}</p>

<h3>Tags</h3>
<ul>
    @foreach ($forum->tags as $tag)
    <li>{{ $tag->name }}</li>
    @endforeach
</ul>

<h3>Jumlah Likes</h3>
<p>
    {{$forum->likes->count()}}
</p>