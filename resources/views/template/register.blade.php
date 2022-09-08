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

                                        <h4 class="font-size-18 mt-4">Registrar una Cuenta</h4>
                                        <p class="text-muted">Registrate de forma rápida y segura.</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <form class="" action="index.html">

                                            <div class="auth-form-group-custom mb-4">
                                                <i class="ri-mail-line auti-custom-input-icon"></i>
                                                <label for="email">Correo</label>
                                                <input type="email" class="form-control" id="email"
                                                       placeholder="Ingresar Correo" required>
                                            </div>

                                            <div class="auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username">Usuario</label>
                                                <input type="text" class="form-control" id="username"
                                                       placeholder="Ingresa tu usuario" required>
                                            </div>

                                            <div class="auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Contraseña</label>
                                                <input type="password" class="form-control" id="userpassword"
                                                       placeholder="Ingresa tu contraseña" required>
                                            </div>


                                            <div class="text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">Register
                                                </button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Para Registrarte debes aceptar las politicas de
                                                    Privacidad <a href="#" class="text-primary">Privacidad</a></p>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>¿Ya posees una cuenta? <a href="/login" class="fw-medium text-primary">
                                                Ingresar</a></p>
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
                <div class="authentication-bg position-relative">
                    <div class="bg-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('template.footer');
</body>
</html>
