<form class="login100-form validate-form" wire:submit="login" method="post">
    <span class="login100-form-title">
        {{ translate("USERS_MANAGEMENT|LOGIN_FORM_TITLE") }}
    </span>

    <div>
        <p>
            {{ translate("USERS_MANAGEMENT|LOGIN_FORM_INTRO") }}
        </p>
    </div>

    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="{{ translate("USERS_MANAGEMENT|LOGIN_FORM_USERNAME_TITLE") }}" wire:model.live="email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-email" aria-hidden="true"></i>
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
        <input class="input100" type="password" name="pass" placeholder="{{ translate("USERS_MANAGEMENT|PASSWORD_TITLE") }}" wire:model.live="password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
        </span>
    </div>

    <div class="pt-1">
        <p class="mb-0"><a href="{{ route("reset-password") }}" class="text-primary ms-1">{{ translate("USERS_MANAGEMENT|FORGOT_PASSWORD") }}</a></p>
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn btn-primary loadable" type="submit" wire:loading.attr="disabled" wire:loading.class="loading" wire:target="login">
            {{ translate("USERS_MANAGEMENT|LOGIN_BTN_TITLE") }}
        </button>
    </div>
    <!--
    <div class="text-center pt-3">
        <p class="text-dark mb-0">{{ translate("USERS_MANAGEMENT|NOT_A_MEMBER") }}<a href="{{ route("register") }}" class="text-primary ms-1">{{ translate("USERS_MANAGEMENT|CREATE_AN_ACCOUNT") }}</a></p>
    </div>
    -->
</form>
