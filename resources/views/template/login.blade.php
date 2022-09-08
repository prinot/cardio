@include('template.head');
<body class="auth-body-bg">
<div class="home-btn d-none d-sm-block">
    <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
<div>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div>
                                    <div class="text-center">
                                        <div>
                                            <a href="/" class="logo"><img src="{{asset('assets/images/logo-cardio.png')}}"
                                                                          height="160" alt="logo"></a>
                                        </div>

                                        <h4 class="font-size-18 mt-4">Bienvenidos a Cardio App!</h4>
                                        <p class="text-muted">Ingresa tu correo y contraseña.</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <form class="" action="index.html">

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username">Correo</label>
                                                <input type="text" class="form-control" id="username"
                                                       placeholder="Ingrese su correo">
                                            </div>

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Contraseña</label>
                                                <input type="password" class="form-control" id="password"
                                                       placeholder="Ingrese su contraseña">
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                       id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Recordar
                                                    Sesión</label>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">Ingresar
                                                </button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <a href="auth-recoverpw.html" class="text-muted"><i
                                                        class="mdi mdi-lock me-1"></i> ¿Olvidate tu contraseña?</a>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>¿ No tienes una Cuenta? <a href="register" class="fw-medium text-primary">
                                                Registrate</a></p>
                                        <p>©
                                            <script>document.write(new Date().getFullYear())</script>
                                            Cardio App, Creado con <i class="mdi mdi-heart text-danger"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="authentication-bg">
                    <div class="bg-overlay">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('template.footer')


</body>
</html>
