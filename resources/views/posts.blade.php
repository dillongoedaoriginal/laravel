<h1>Posts</h1>
<p>Posts page is working...</p>

@foreach ($posts as $post)
    <p>{{ $post->Title }}</p>
@endforeach

<a href="/other">Go to other page</a>
<br/>
<a href="/">Go to home</a>