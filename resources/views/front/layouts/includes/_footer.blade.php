<!-- start footer -->
<footer>
    <div class="box footer">
        <div class="footerLogo">
            <img src="{{ asset('assets/front/media/logo.png') }}" alt="">
            <p>
                هل تريد حياة أفضل براتب أعلى؟ نحن نجتاز امتحانك عبر الإنترنت تحت إشرافنا دون علم مقدم الخدمة! </p>
        </div>
        <div class="footerLinkGroup">
            <div class="linkGroup">
                <h2>روابط سريعة</h2>
                <ul>
                    <li><a href="{{ route('front.home.index') }}"> <i class="fa-light fa-home"></i> الرئيسية </a></li>
                    <li><a href="{{ route('front.why-us.index') }}"> <i class="fa-light fa-question-circle"></i> لماذا نحن </a>
                    </li>
                    <li><a href="{{ route('front.faq.index') }}"> <i class="fa-light fa-comments"></i> أسئلة شائعة </a></li>
                    <li><a href="{{ route('front.store.index') }}"> <i class="fa-light fa-bookmark"></i> المتجر </a></li>
                    <li><a href="{{ route('front.instructions.index') }}"> <i class="fa-light fa-paste"></i> التعليمات </a></li>
                </ul>
            </div>
            <div class="linkGroup cont">
                <h2>تواصل معنا </h2>
                <ul>
                    <li><a href="##"> <i class="fa-brands fa-whatsapp"></i> واتساب </a></li>
                    <li><a href="##"> <i class="fa-light fa-paper-plane"></i> تليجرام </a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>
<!-- end footer -->
<script src="{{ asset('assets/front/js/main.js') }}"></script>
@stack('js')

