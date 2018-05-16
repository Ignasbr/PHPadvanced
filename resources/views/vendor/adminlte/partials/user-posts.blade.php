<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{$post_count}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have {{$post_count}} posts</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">

                @forelse($posts as $post)
                    <li>
                        <a href="{{ route('admin.posts.show', ['id' => $post->id]) }}">
                            <i></i> {{$post->title}}
                        </a>
                    </li>
                @empty
                    <li>
                        <a href="#">
                            <i></i> You dont have any posts!
                        </a>
                    </li>
                @endforelse

            </ul>
        </li>
        <li class="footer"><a href="{{route('admin.posts.index')}}">View all</a></li>
    </ul>
</li>
