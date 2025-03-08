    <!-- Start Nav -->
    <nav>
        <div class="box f-s">
            <a href="{{ route('front.home.index') }}" class="logo">
                <img src="{{ asset('assets/front/media/logo.png') }}" alt="">
            </a>
            <div class="links">
                <div class="ls">
                    <ul class="mainLinks">
                        <li><a class="link" href="{{ route('front.home.index') }}">الرئيسية</a></li>
                        <li><a class="link" href="{{ route('front.why-us.index') }}">لماذا نحن</a></li>
                        <li><a class="link" href="{{ route('front.faq.index') }}">أسئلة شائعة</a></li>
                        <li><a class="link" href="{{ route('front.store.index') }}">
                                <div class="store">
                                    المتجر
                                    <i class="fa-light fa-bookmark"></i>
                                </div>
                            </a></li>
                        <li><a class="link" href="{{ route('front.instructions.index') }}">
                                <div class="ints">
                                    التعليمات
                                    <i class="fa-light fa-paste"></i>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>

            <button class="menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
        <div class="box">

        </div>
    </nav>
    <!-- End Nav -->
