<h1>Other</h1>

<p>Other page is working... </p>

<a href="/posts">Go to posts</a>
<br/>
<a href="/">Go to home</a>

@foreach ($posts as $post)
    <p>{{ $post->Title }}</p>
@endforeach