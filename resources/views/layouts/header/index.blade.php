<!-- Start Top Bar Area -->
<div class="top-bar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <ul class="top-bar-information">
                    <li>
                        <i class="flaticon-wall-clock"></i>
                        {{ __('translation.working-hours') }}
                    </li>

                    <li>
                        <i class="flaticon-phone-call"></i>
                        {{ __('translation.call-us') }}
                         <a href="tel:882563789966">{{ __('translation.phone-number') }}</a>
                    </li>

                    <li>
                        <i class="flaticon-envelope"></i>
                        {{ __('translation.email') }}: <a href="mailto:hello@mediva.com">{{ __('translation.email-address') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <ul class="top-bar-optional">
{{--                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class='bx bxl-pinterest-alt'></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class='bx bxl-instagram'></i>
                        </a>
                    </li>--}}

                    <li>
                        <div class="languages-list">
                            <select id="s1">
                                <option @if($lang == 'de') selected @endif value="de">Deutsch</option>
                                <option @if($lang == 'ar') selected @endif value="ar">العربيّة</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Bar Area -->
@push('scripts')
    <script>
        $(document).ready(function(){
            $(document).on('change', '#s1', function(event){
                event.preventDefault();
                switch(document.getElementById('s1').value) {
                    case "de":
                        window.location = "{{route('switchLan','de')}}";
                        break;
                    case "ar":
                        window.location = "{{route('switchLan','ar')}}";
                        break;
                }

            });
        });

    </script>
@endpush