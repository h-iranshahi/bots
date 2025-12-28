<form class="login100-form validate-form" method="post">
    <span class="login100-form-title">
        {{ translate("USERS_MANAGEMENT|REGISTER_FORM_TITLE") }}
    </span>
    <!--
    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="User name">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="mdi mdi-account" aria-hidden="true"></i>
        </span>
    </div>
    -->
    <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email"
               placeholder="{{ translate("USERS_MANAGEMENT|MOBILE_NUMBER_TITLE") }}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-email" aria-hidden="true"></i>
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
        <input class="input100" type="password" name="pass"
               placeholder="{{ translate("USERS_MANAGEMENT|PASSWORD_TITLE") }}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
        </span>
    </div>
    <label class="custom-control custom-checkbox mt-4">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-label">{{ translate("USERS_MANAGEMENT|REGISTER_FORM_TERMS_TITLE1") }} <a
                href="{{ route("terms_and_policy") }}">{{ translate("USERS_MANAGEMENT|REGISTER_FORM_TERMS_TITLE2") }}</a></span>
    </label>
    <div class="container-login100-form-btn">
        <a href="index.html" class="login100-form-btn btn-primary">
            {{ translate("USERS_MANAGEMENT|REGISTER_FORM_BTN_TITLE")  }}
        </a>
    </div>
    <div class="text-center pt-3">
        <p class="text-dark mb-0">{{ translate("USERS_MANAGEMENT|REGISTER_FORM_ALREADY_HAVE_ACCOUNT") }}<a
                href="{{ route("login")}}"
                class="text-primary ms-1">{{ translate("USERS_MANAGEMENT|REGISTER_FORM_LOGIN_LINK_TITLE") }}</a></p>
    </div>
</form>
