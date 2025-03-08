@extends('front.layouts.app')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@section('content')
    <div class="fg20 balf">
        <div class="box FEATURESStore">
            <span>المميزات</span>
            <h1>نحن نضمن رضاك</h1>
        </div>

        <div class="box ftis">
            <div class="fti" tabindex="0">
                <i class="fa-regular fa-medal"></i>
                <h2>ضمان النجاح بنسبة 100%</h2>
                <p>ضمان النجاح بنسبة 100% يضمن لك التفوق، مما يمنحك الثقة والاطمئنان في كل مسعى امتحاني.</p>
            </div>

            <div class="fti" tabindex="0">
                <i class="fa-regular fa-headset"></i>
                <h2>دعم على مدار الساعة</h2>
                <p>الدعم الموثوق المتوفر على مدار الساعة يضمن لك الحصول على المساعدة في أي وقت لتجربة مريحة وسلسة.</p>
            </div>

            <div class="fti" tabindex="0">
                <i class="fa-regular fa-crown"></i>
                <h2>ضمان استرداد الأموال</h2>
                <p>ضمان استرداد الأموال القوي يضمن لك استرداداً كاملاً في السيناريو النادر جداً لفشل الامتحان.</p>
            </div>

        </div>

    </div>
    <form class="box bookingBox" method="POST" action="{{ route('front.store.store') }}">
        @csrf
        <!-- Start Steps -->
        <div class="steps">
            <div class="logo">
                <img src="{{ asset('assets/back/media/logo.png') }}" alt="">
            </div>
            <div class="step" id="step1">
                <div class="sI">
                    <span>
                        1
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                إختيار الخدمة
            </div>
            <div class="step" id="step2">
                <div class="sI">
                    <span>
                        2
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                التاريخ و الوقت
            </div>
            <div class="step" id="step3">
                <div class="sI">
                    <span>
                        3
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                المعلومات
            </div>
            <div class="step" id="step4">
                <div class="sI">
                    <span>
                        4
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                </div>
                التأكيد
            </div>
        </div>
        <!-- End Steps -->

        @if (session('successResponse'))
            <div class="sections">
                <div class="doneConfirm">
                    <i class="fa-thin fa-circle-check"></i>
                    <h1>{{ session('successResponse.success') }}</h1>
                    <h2>رقم الطلب</h2>
                    <span>{{ session('successResponse.orderNumber') }}</span>
                    <div class="info">
                        <i class="fa-regular fa-info-circle"></i>
                        سيتم التواصل معك من قبل احد المسئولين
                    </div>
                </div>
            </div>
        @endif
        <!-- Start Sections -->
        @if(!session('successResponse'))
        <div class="sections">
            <!-- Start Services Section -->
            <div class="services" id="services">
                <h2 class="h2">اختر خدمة</h2>
                @forelse ($categories as $category)
                    <div class="servicesinner">
                        <div class="servicesWrap">
                            <div class="tix">
                                <span>{{ $category->name }}</span>
                                <i class="fa-regular fa-angle-left"></i>
                            </div>
                        </div>
                        <div class="col20">
                            @forelse ($category->services as $service)
                                <div class="servx" tabindex="0" data-service-id="{{ $service->id }}">
                                    <div class="flexB">
                                        <div class="infoSr">
                                            <img src="{{ asset('uploads/services/' . $service->image) }}" alt="">
                                            <div class="int">
                                                <h2>{{ $service->name }}</h2>
                                                <span>{{ $service->duration }}</span>
                                            </div>
                                        </div>
                                        <h1>{{ $service->price }} LE</h1>
                                    </div>
                                    <p>{{ $service->description }}</p>
                                </div>
                            @empty
                                <span style="color: black">there is no services in this category</span>
                            @endforelse

                        </div>
                    </div>
                @empty
                    <span style="color: black">there is no Services Categories here</span>
                @endforelse
                <input type="hidden" name="service_id" id="selectedServiceId">
            </div>
            <!-- End Services Section -->

            <!-- Start dataTime -->
            <div class="dataTime" id="datetime" style="display: none;">
                <div class="info">
                    <i class="fa-regular fa-info-circle"></i>
                    برجاء اخيار الموعد قبل بداية الامتحان بما لا يقل عن نصف ساعة
                </div>
                <div class="input">
                    <span>التاريخ</span>
                    <input type="text" id="datePicker" placeholder="اختر تاريخ" readonly name="date">
                </div>
                <div class="input">
                    <span>الوقت</span>
                    <input type="text" id="timePicker" placeholder="اختر وقت" readonly name="time">
                </div>
            </div>
            <!-- End dataTime -->

            <!-- Start info -->
            <div class="inputs" id="info" style="display: none;">
                <h2 class="h2">بيانات المستخدم</h2>

                <div class="input">
                    <span>الاسم بالكامل *</span>
                    <input type="text" required name="fullName" id="fullName" name="name">
                </div>

                <div class="input">
                    <span>البريد الالكتروني *</span>
                    <input type="email" required name="email" id="email" name="email">
                </div>

                <div class="input">
                    <span>رقم الهاتف *</span>
                    <input type="number" required name="phoneNumber" id="phoneNumber" name="phone">
                </div>

                <div class="input">
                    <span>طريقة الدفع *</span>
                    <select required name="paymentMethod">
                        @foreach ($payments as $payment)
                            <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input">
                    <span>رقم/رابط واتساب</span>
                    <input type="text" name="whatsapp" id="whatsapp">
                </div>

                <div class="input">
                    <span>رقم/رابط تليجرام</span>
                    <input type="text" name="telegram" id="telegram">
                </div>
            </div>

            <!-- End info -->

            <!-- Start Confirm -->
            <div class="confirm" id="confirm" style="display: none;">
                <h2 class="h2">تأكيد الطلب </h2>
                <div class="dataRow">
                    <span>
                        الخدمة
                    </span>
                    <span>
                        العنوان (300 LE)
                    </span>
                </div>
                <div class="dataRow">
                    <span>
                        التاريخ
                    </span>
                    <span id="confirmDate"></span>
                </div>
                <div class="dataRow">
                    <span>
                        الوقت
                    </span>
                    <span id="confirmTime"></span>
                </div>
                <div class="dataRow">
                    <span>
                        الاسم بالكامل
                    </span>
                    <span id="confirmFullName"></span>
                </div>
                <div class="dataRow">
                    <span>
                        البريد الالكتروني
                    </span>
                    <span id="confirmEmail"></span>
                </div>
                <div class="dataRow">
                    <span>
                        رقم الهاتف
                    </span>
                    <span id="confirmPhoneNumber"></span>
                </div>
                <div class="dataRow">
                    <span>
                        واتساب
                    </span>
                    <span id="confirmWhatsapp"></span>

                </div>
                <div class="dataRow">
                    <span>
                        تليجرام
                    </span>
                    <span id="confirmTelegram"></span>
                </div>
                <button type="submit">
                    تأكيد الطلب
                    <!-- <span class="loader2"></span> -->
                </button>
                <!-- After Confirm -->


            </div>
            <!-- End Confirm -->
        </div>
        <!-- Start Sections -->

        <!-- Start Next Button -->
        <div class="nextButton">
            <button type="button" id="nextBtn">
                التالي
            </button>
        </div>
        <!-- End Next Button -->
        @endif
    </form>
@endsection
@push('js')
    <script src="{{ asset('assets/front/js/message.js') }}"></script>
    <script src="{{ asset('assets/front/js/store.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#datePicker", {
            enableTime: false,
            dateFormat: "Y-m-d",
            minDate: "today",
            disableMobile: "true",
        });
        flatpickr("#timePicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: false,
            disableMobile: "true",
        });
    </script>
    </script>
    <script src="{{ asset('assets/front/js/calender.js') }}"></script>
    <script>
        document.getElementById('nextBtn').addEventListener('click', function() {
            // Get values from input fields
            const date = document.getElementById('datePicker').value;
            const time = document.getElementById('timePicker').value;
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const whatsapp = document.getElementById('whatsapp').value;
            const telegram = document.getElementById('telegram').value;


            // Populate confirmation step
            document.getElementById('confirmDate').textContent = date;
            document.getElementById('confirmTime').textContent = time;
            document.getElementById('confirmFullName').textContent = fullName;
            document.getElementById('confirmFullName').textContent = fullName || 'غير متوفر';
            document.getElementById('confirmEmail').textContent = email || 'غير متوفر';
            document.getElementById('confirmPhoneNumber').textContent = phoneNumber || 'غير متوفر';
            document.getElementById('confirmWhatsapp').textContent = whatsapp || 'غير متوفر';
            document.getElementById('confirmTelegram').textContent = telegram || 'غير متوفر';


            // // Show step 4 and hide others
            // document.getElementById('step4').style.display = 'block';
            // document.getElementById('services').style.display = 'none';
            // document.getElementById('datetime').style.display = 'none';
            // document.getElementById('info').style.display = 'none';
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all service elements
            const serviceElements = document.querySelectorAll('.servx');
            console.log(serviceElements)
            serviceElements.forEach(serviceElement => {
                serviceElement.addEventListener('click', function() {
                    // Remove 'selected' class from all services
                    serviceElements.forEach(el => el.classList.remove('selected'));

                    // Add 'selected' class to the clicked service
                    this.classList.add('selected');

                    // Get the service ID and set it in the hidden input
                    const serviceId = this.dataset.serviceId; // Assuming data attribute
                    document.getElementById('selectedServiceId').value = serviceId;
                });
            });
        });
    </script>
@endpush
