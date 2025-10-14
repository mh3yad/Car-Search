<x-guest-layout title="login" csClass="page-login">
    <x-slot:form>
        <form action="" method="post">
            <div class="form-group">
                <input type="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
                <input type="password" placeholder="Your Password" />
            </div>
            <div class="text-right mb-medium">
                <a href="/password-reset.html" class="auth-page-password-reset"
                >Reset Password</a
                >
            </div>

            <button class="btn btn-primary btn-login w-full">Login</button>

            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                <x-oauth-button company="google"/>
                <x-oauth-button company="facebook"/>
            </div>
            <div class="login-text-dont-have-account">
                Don't have an account? -
                <a href="/signup.html"> Click here to create one</a>
            </div>
        </form>
    </x-slot:form>
</x-guest-layout>