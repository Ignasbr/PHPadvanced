@foreach($posts as $post)
<tr role="row" class="odd" style="background-color: @if($loop->index%2 == 0) #bdc3c7 @else white @endif">
    <td >{{$post->id}}</td>
    <td >{{$post->title}}</td>
    <td >{{$post->created_at}}</td>
    <td ><a href="{{ route('admin.users.show', ['id' => $post->user->id]) }}">{{$post->user->name}}</a></td>
    <td >{{$post->comments->count()}}</td>
    <td><a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">View</a> </td>
</tr>
@endforeach

