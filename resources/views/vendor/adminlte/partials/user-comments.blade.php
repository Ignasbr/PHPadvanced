<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{$comments_count}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have {{$comments_count}} comments</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                @forelse($comments as $comment)
                    <li>
                        <a href="{{route('admin.comments.show', ['id' => $comment->id])}}">
                            <i class="fa fa-users text-aqua"></i> {{$comment->content}}
                        </a>
                    </li>
                @empty
                    <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i> You dont have any comments!
                        </a>
                    </li>
                @endforelse
            </ul>
        </li>
        <li class="footer"><a href="{{route('admin.comments.index')}}">View all</a></li>
    </ul>
</li>
