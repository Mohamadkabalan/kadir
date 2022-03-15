@php $blogs = \App\Blog::all();  @endphp
@if($blogs)
<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('translation.gallery') }}</h2>
            {{--<div class="bar"></div>--}}
            {{--<p>{{ __('translation.our-latest-news-description') }}</p>--}}
        </div>

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="/blog-details/{{$blog->id}}"><img src="{{ 'storage/'.str_replace('\\', '/', $blog->image) }}" alt="image"></a>
                        {{--<span>{{ explode(' ',$blog->created_at)[0]}}</span>--}}
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="/blog-details/{{$blog->id}}">@if($lang=='de') {{$blog->title_de}} @else {{$blog->title_ar}} @endif</a>
                        </h3>
                        <p>@if($lang=='de') {{$blog->text_de}} @else {{$blog->text_ar}} @endif</p>
                        {{--<a href="/blog-details/{{$blog->id}}" class="blog-btn">{{ __('translation.learn-more') }} +</a>--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endif