<!-- Start Newsletter Area -->
<div class="newsletter-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="newsletter-content">
                    <h2>{{ __('translation.subscribe-your-email') }}</h2>
                </div>
            </div>

            <div class="col-lg-6">

                <form class="newsletter-form" id="newsletter-form">
                    @csrf
                    <input type="email" class="input-newsletter" placeholder="{{ __('translation.enter-your-email') }}" id="email" name="email" required autocomplete="off">

                    <button type="submit">{{ __('translation.subscribe-now') }}</button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Area -->

@push('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('submit','#newsletter-form',function(e){
                e.preventDefault();
                $.ajax({
                    url: "/newsletter/create",
                    method: "POST",
                    data : $('#newsletter-form').serialize(),
                    success: function (data) {
                        if(data.status==200){
                            $('#newsletter-message').html(data.message);
                            $('#newsletter-form')[0].reset();
                        }
                    }
                });
            });
        });
    </script>
@endpush