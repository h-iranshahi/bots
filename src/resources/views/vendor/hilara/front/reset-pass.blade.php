@extends( 'layouts.entering' )

@section( 'content' )
<form class="login100-form validate-form" action="{{ route("reset-password-after-submit") }}" method="post">
    <span class="login100-form-title">
        ارسال رمز عبور
    </span>

    <div>
         <p>شماره تماس خود را وارد نمایید</p>
    </div>

    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="{{ translate("USERS_MANAGEMENT|LOGIN_FORM_USERNAME_TITLE") }}" wire:model.live="mobile">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-email" aria-hidden="true"></i>
        </span>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn btn-primary"  >
            ارسال
        </button>
    </div>

</form>
@stop
