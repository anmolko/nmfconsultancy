<div class="sidebar">
    <aside class="widget-area">
        <div class="sidebar__single sidebar__search-wrap">
            <form action="{{route('searchBlog')}}" method="get" class="sidebar__search">
                <input type="text" id="search" placeholder="Search Here..." name="s"   oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required/>
                <button type="submit" aria-label="search submit">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <div class="sidebar__single">
            <h4 class="sidebar__title">Latest posts</h4>
            <ul class="sidebar__posts list-unstyled">
                @foreach($latestPosts as $index => $latest)
                    <li class="sidebar__posts__item">
                    <div class="sidebar__posts__image">
                        <img class="thumbnail lazy" data-src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}"  alt="">
                    </div>
                    <div class="sidebar__posts__content">
                        <p class="sidebar__posts__meta"><a href="{{route('blog.single',$latest->slug)}}">
                                <i class="fa fa-calendar-alt"></i>
                                {{date('d M Y', strtotime($latest->created_at))}}</a></p>
                        <h4 class="sidebar__posts__title"><a href="{{route('blog.single',$latest->slug)}}">
                                {{ucwords(@$latest->title)}}
                            </a></h4>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="sidebar__single">
            <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
            <ul class="sidebar__categories list-unstyled">
                @foreach(@$bcategories as $bcategory)
                    <li><a href="{{route('blog.category',$bcategory->slug)}}">{{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}})</a></li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
