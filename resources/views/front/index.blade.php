@extends('front.layouts.app')

@section('content')
    <div class="homeinner">
        <div class="box homeCont">
            <div class="hometextinner">
                <h1>نجتاز اختباراتك الإلكترونية</h1>
                <span class="initial">اجتياز الاختبارات الإلكترونية</span>
                <span id="typing">
                    <p id="text"></p>
                    <p id="cursor" class="cursor"></p>
                </span>
                <div class="info">
                    <div class="icon">
                        <i class="fa-solid fa-check-square"></i>
                    </div>
                    هل ترغب في حياة أفضل وراتب أعلى؟ نحن نجتاز اختباراتك الإلكترونية المراقبة دون علم الجهة الموفرة!
                </div>
                <a href="{{ route('front.store.index') }}" class="store lBG">
                    المتجر
                    <i class="fa-solid fa-shopping-bag"></i>
                </a>
                <div class="coSliderInner">
                    <div class="swiper coSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="coImg">
                                    <img src="{{ asset('assets/front/media/icons/co/apple.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="coImg">
                                    <img src="{{ asset('assets/front/media/icons/co/microsoft.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="coImg">
                                    <img src="{{ asset('assets/front/media/icons/co/cisco.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="coImg">
                                    <img src="{{ asset('assets/front/media/icons/co/onvue.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="coImg">
                                    <img src="{{ asset('assets/front/media/icons/co/pmi.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="homeimg" src="{{ asset('assets/front/media/home.svg') }}" alt="">
        </div>
    </div>

    <div class="afterHome">
        <div class="box">
            <div class="box banner">
                <img src="{{ asset('assets/front/media/studying.webp') }}" alt="">
                <h1>شريكك الموثوق لتحقيق النجاح في الامتحانات</h1>
                <p>في PassExams، نعيد تعريف كيفية تحقيق الأفراد لأهدافهم التعليمية والمهنية. يمكن أن يكون التحضير
                    للامتحانات
                    مرهقًا ويستغرق الكثير من الوقت. لهذا السبب نقدم حلولاً مبتكرة تساعدك على التفوق في امتحاناتك
                    الإلكترونية
                    بكفاءة وفعالية.</p>
            </div>
        </div>
        <div class="box counters">
            <div class="counter">
                <span data-num="1000" data-option="+">0</span>
                <h2>العملاء</h2>
                <p>
                    نجحنا في اجتياز أكثر من 1000 اختبار إلكتروني.
                </p>
            </div>
            <div class="counter">
                <span data-num="100" data-option="%">0</span>
                <h2>معدل الرضا</h2>
                <p>
                    ضمان رضاكم هو أولويتنا القصوى.
                </p>
            </div>
            <div class="counter">
                <span data-num="250" data-option="+">0</span>
                <h2>خيارات الشهادات</h2>
                <p>
                    نوفر خيارات متعددة لتجاوز الاختبارات الإلكترونية.
                </p>
            </div>
            <div class="counter">
                <span data-num="5">0</span>
                <h2>سنوات الخبرة</h2>
                <p>
                    منذ عام 2018، نحقق نجاحًا مستمرًا في الاختبارات الإلكترونية.
                </p>
            </div>
        </div>
        <div class="box ktx">
            <h1>اجتياز اختباراتك الإلكترونية</h1>
            <p>
                مهمتنا هي جعل الوظائف ذات الأجور العالية أكثر سهولة للأشخاص. في الوقت الحاضر، يتم النظر إليك في الوظيفة
                بناءً
                على مؤهلاتك. يقوم أصحاب العمل بتقييم معرفتك بناءً على مؤهلاتك. عالمنا بالفعل مكان مليء بالتحديات لتحقيق
                الأهداف؛
                هدفنا هو ضمان تحقيقك لأهدافك!
            </p>
        </div>
        <div class="box didS">
            <div class="didu">
                <div class="store">
                    هل تعلم ؟ 👋
                </div>
                <h1>نحن الرقم #1</h1>
                <div class="main">
                    في إجتياز الاختبارات الإلكترونية
                </div>
            </div>
            <div class="feat">
                <i class="fa-light fa-star"></i>
                <h3>ضمان السرية</h3>
                <p>
                    نضمن السرية الكاملة. خصوصيتك وأمان بياناتك هما أولويتنا القصوى. نحن لا نخزن أي بيانات.
                </p>
            </div>
            <div class="feat">
                <i class="fa-light fa-star"></i>
                <h3>الوصول العالمي</h3>
                <p>
                    يمكنك الوصول إلى خدماتنا من أي مكان وفي أي وقت حول العالم.
                </p>
            </div>
            <div class="feat">
                <i class="fa-light fa-star"></i>
                <h3>مدفوعات آمنة</h3>
                <p>
                    استمتع براحة البال مع وسائل دفع آمنة ومريحة لخدماتنا.
                </p>
            </div>

        </div>
        <div class="box axerx">
            <span>
                برنامجنا غير قابل
                <h1>للكشف</h1>
            </span>
            <div class="p">
                <p>
                    يتميز برنامجنا بسجل مثير للإعجاب حيث ظل غير قابل للكشف لأكثر من ست سنوات، وقد تم تصميمه بعناية فائقة
                    للتغلب
                    على جميع الإجراءات المضادة للغش التي يستخدمها مقدمو الامتحانات المراقبة. عمليتنا سلسة وفعالة: نقوم
                    بتثبيت
                    برنامجنا على جهاز الكمبيوتر الخاص بك، مما يتيح لك الاسترخاء بينما نجتاز اختباراتك الإلكترونية
                    باحترافية، وكل
                    ما عليك فعله هو النظر إلى الشاشة.
                </p>
                <p>
                    يضمن هذا النهج المبتكر في الاختبارات الإلكترونية نجاحك وسرية عملية الامتحان. نحن أكثر من مجرد خدمة؛
                    نحن رفاقك
                    المخلصون في رحلة النجاح.
                </p>
            </div>
        </div>
        <div class="box fxs">
            <div class="fx">
                <i class="fa-light fa-thumbs-up"></i>
                <h1>إرشاد الخبراء</h1>
                <p>استفد من خبرة فريقنا وإرشادهم طوال رحلتك.</p>
            </div>
            <div class="fx">
                <i class="fa-light fa-headset"></i>
                <h1>دعم ما بعد البيع</h1>
                <p>كن مطمئنًا بأن فريق دعم ما بعد البيع موجود لمساعدتك في أي استفسارات.</p>
            </div>
        </div>

    </div>

    <div class="box tos">
        <div class="xatex">
            <span>ماذا تنتظر؟</span>
            <h1>لدينا سياسة ضمان نجاح بنسبة 100%</h1>
            <div class="p">
                <p>نضمن لك استرداد كامل قيمة طلبك، بما في ذلك قسيمة الامتحان، في حال عدم اجتياز الامتحان. ومن الجدير
                    بالذكر أن
                    مثل هذا السيناريو لم يحدث أبدًا.</p>
                <p>بالإضافة إلى ذلك، سنقدم إعادة الخدمة مجانًا.</p>
            </div>
        </div>
        <img src="{{ asset('assets/front/media/terms-of-service.svg') }}" alt="شروط الخدمة">
    </div>

    <div class="howit">
        <h1>كيف تتم الامور ؟ </h1>
        <div class="box2">
            <div class="howInner">
                <div class="howItem">
                    <i class="fa-light fa-calendar"></i>
                    <div class="hit">
                        <span>1.</span>
                        <div class="hiTe">
                            <h1>اشترِ تذكرتك للامتحان</h1>
                            <p>
                                ابدأ بالبحث عن متطلبات وظيفة أحلامك واختيار امتحانك من مجموعة متنوعة من مقدمي الشهادات
                                المعتمدين عبر الإنترنت. يمكننا مساعدتك في ذلك - لا تتردد في التواصل معنا عبر الدردشة
                                المباشرة.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="howItem">
                    <i class="fa-light fa-money-bill"></i> <!-- Use the correct icon -->
                    <div class="hit">
                        <span>2.</span>
                        <div class="hiTe">
                            <h1>قم بإجراء طلبك معنا</h1>
                            <p>
                                عندما تكون واثقًا في اختيار الامتحان، ببساطة قم بإجراء الحجز عبر متجرنا الإلكتروني سهل
                                الاستخدام.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="howItem">
                    <i class="fa-light fa-comment-alt"></i> <!-- Use the correct icon -->
                    <div class="hit">
                        <span>3.</span>
                        <div class="hiTe">
                            <h1>تواصل معنا</h1>
                            <p>
                                بعد إتمام الطلب، ستتلقى تعليمات مفصلة حول كيفية الاتصال بنا، ونحن نعدك أننا سنبذل كل
                                جهدنا للتواصل معك.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="howItem">
                    <i class="fa-light fa-download"></i> <!-- Use the correct icon -->
                    <div class="hit">
                        <span>4.</span>
                        <div class="hiTe">
                            <h1>قم بتثبيت برنامجنا</h1>
                            <p>
                                نقوم بتثبيت برنامجنا على جهازك لفترة مؤقتة، مع ضمان إزالته بعد إتمام الخدمة. نحن نضمن
                                عدم وجود سجلات أو ملفات متبقية بعد إتمام الخدمة.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="howItem">
                    <i class="fa-light fa-pencil-alt"></i> <!-- Use the correct icon -->
                    <div class="hit">
                        <span>5.</span>
                        <div class="hiTe">
                            <h1>نحن نأخذ امتحانك</h1>
                            <p>
                                نحن نجيب على الأسئلة بينما تركز انتباهك فقط على الشاشة، دون أن تشتت انتباهك إلى أي شيء
                                آخر.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="howItem">
                    <i class="fa-light fa-star"></i> <!-- Use the correct icon -->
                    <div class="hit">
                        <span>6.</span>
                        <div class="hiTe">
                            <h1>احصل على نتائجك</h1>
                            <p>
                                بعد استلامك لشهادتك، سيتم إلغاء تثبيت برنامجنا على الفور، مما يدل على إتمام الخدمة
                                بنجاح.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/front/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/front/js/swiper.js') }}"></script>
<script src="{{ asset('assets/front/js/counter.js') }}"></script>
<script>
    const text = document.querySelector('.initial').innerText;
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        } else {
            const cursorElement = document.getElementById("cursor");
            cursorElement.classList.add("cursor-extended");
        }
    }

    typeWriter();
</script>

@endpush
