@php $banners = \App\Banner::all();  @endphp
@if($banners)
<!-- Start Main Banner Area -->
@foreach($banners as $key => $banner)
<div class="main-banner">
    <div class="main-banner-item"  style="background: url({{ 'storage/'.str_replace('\\', '/', $banner->image) }})" >
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">

                    <div class="main-banner-content">
                        <h1>@if($lang=='de') {{$banner->title_de}} @else {{$banner->title_ar}}  @endif</h1>
                        <h2 class="text-white">@if($lang=='de') {{$banner->text_de}} @else {{$banner->text_ar}}  @endif</h2>
                    </div>


{{--                    <div class="main-banner-search-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="form-group">
                                        <label><i class='flaticon-pin'></i></label>
                                        <input type="text" class="form-control" placeholder="Search Location">
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-6">
                                    <div class="form-group">
                                        <label><i class='flaticon-doctor-2'></i></label>
                                        <input type="text" class="form-control" placeholder="Search Doctors">
                                    </div>
                                </div>

                                <button type="submit"><i class='bx bx-search-alt'></i></button>
                            </div>
                        </form>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->
@endforeach
@endif
