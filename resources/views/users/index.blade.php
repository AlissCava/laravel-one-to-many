@foreach ($users as $user)
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    @foreach ($user->posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    @endforeach
@endforeach