@if($section === 'related')
<div class="col-xl-6 col-lg-12 m-25px-b">
    <div class="single-blog-wrap">
        <div class="single-blog">
            <img src="{{ asset($item['bg'])}}" alt="">
            <div class="post-content">
                <p>{{ $item['detail'] }}</p>
                <a href="single-blog.html">Read more</a>
            </div>
            <div class="post-info">
                <ul>
                    <li><b>Posted by:</b> {{ $item['posted_by'] }}</li>
                    <li><b>On:</b> {{ $item['on'] }}</li>
                </ul>
            </div>
        </div>
        <div class="post-header">
            <a class="date" href="#">
                <span class="day">{{ $item['date'] }}</span>
                <span class="month">{{ $item['month'] }}</span>
            </a>
            <h3><a href="single-blog.html">{{ $item['title'] }}</a></h3>
        </div>
    </div>
</div>
@endif
