<h1>Forum {{ $forum->title }}</h1>

<h3>Author : </h3>
<p>{{ $forum->user->name }}</p>

<h3>Jumlah Likes</h3>
<p>
    {{$forum->likes->count()}}
</p>