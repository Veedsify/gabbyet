@props(['media'])
<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 d-flex justify-content-between w-100">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="tel:08135922182">08135922182</a> or
                    <span class="mailus">email us:</span> <a href="mailto:gabrieletim2018@gmail.com"><span
                            class="__cf_email__"
                            data-cfemail="36535b575f5a45575b465a5376535b575f5a1855595b">[email&#160;protected]</span></a>
                </p>
                @auth
                    {{ auth()->user()->fullname }}
                @endauth
                @guest
                    <div class="gap-3 justify-content-end d-flex  ">
                        <a href="{{ route('login') }}" class="text-white  fw-bolder">LOGIN</a>
                        <a href="{{ route('register') }}" class="text-white fw-bolder ">REGISTER</a>
                    </div>
                @endguest
            </div>
            <div class="">
                <div class="social-media d-flex ">
                    <p class="">
                        <a href="https://www.facebook.com/gabriel.etim.503" class=""><span
                                class="fa fa-facebook"><i class="">Facebook</i></span></a>
                        <a href="https://x.com/Gabbbyeti?t=f6Hx-5GImb7IlY6CmR3oCQ&s=09" class=""><span
                                class="fa fa-twitter"><i class="">Twitter</i></span></a>
                        <a href="https://www.instagram.com/invites/contact/?i=1g3wvzr3ii8d&utm_content=njpvq8t"
                            class=""><span class="fa fa-instagram"><i class="">Instagram</i></span></a>
                        <a href="https://wa.me/+2348135922182?text=hello" class=""><span class="fa fa-whatsapp"><i
                                    class="">Whatsapp</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
