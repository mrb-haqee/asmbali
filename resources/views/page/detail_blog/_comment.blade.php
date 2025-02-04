@if($section === 'comments')
<li class="comment">
    <div class="the-comment">
        <div class="avatar">
            <img src="{{ asset($item['bg'])}}" alt="">
        </div>
        <div class="comment-box">
            <div class="comment-author meta">
                <strong>{{ $item['name'] }}</strong> September 2, 2018 at 1:38 pm<a rel="nofollow" class="comment-reply-link" href="#"> - Reply</a>
            </div>
            <div class="comment-text">
                <p>{{ $item['comment']}}</p>
            </div>
        </div>
    </div>

    {{-- <ul class="children">
        <li class="comment">
            <div class="the-comment">
                <div class="avatar">
                    <img src="{{ asset('img/donors/2.jpg')}}" alt="">
                </div>
                <div class="comment-box">
                    <div class="comment-author meta">
                        <strong>Purnima</strong> June 2, 2018 at 1:39 pm<a rel="nofollow" class="comment-reply-link" href="#"> - Reply</a>
                    </div>
                    <div class="comment-text">
                        <p>Certainty determine at of arranging perceived situation or. Or wholly pretty county in oppose. Favour met itself wanted settle put garret twenty. In astonished apartments resolution so an it. Unsatiable on by contrasted to reasonable companions an. On otherwise no admitting to suspicion furniture it. </p>
                    </div>
                </div>
            </div>
        </li>
    </ul> --}}
</li>
@endif
