<x-auth-layout>

    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="/reset-password" action="#">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">
                Şifremi Unuttum ?
            </h1>
            <!--end::Title-->

            <!--begin::Link-->
            <div class="text-gray-500 fw-semibold fs-6">
            Parolanızı sıfırlamak için e-posta adresinizi girin.
            </div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->

        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="E-Posta" name="email" autocomplete="off" class="form-control bg-transparent"/>
            <!--end::Email-->
        </div>

        <!--begin::Actions-->
        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
            <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                @include('partials/general/_button-indicator', ['label' => 'Gönder'])
            </button>

            <a href="/login" class="btn btn-light">İptal</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->

</x-auth-layout>
