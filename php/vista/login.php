<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro con Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 500px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            padding: 20px;
        }

        .toggle-btn {
            background-color: transparent;
            border: none;
            color: #0d6efd;
            cursor: pointer;
            text-decoration: underline;
            padding: 0;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <!-- Título del Formulario -->
            <h2 class="text-center mb-4" id="form-title">Iniciar Sesión</h2>

            <!-- Formulario de Login -->
            <div id="login-form" class="form-container">
                <form>
                    <div class="mb-3">
                        <label for="login-usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="login-usuario" placeholder="Ingresa tu usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="login-contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="login-contraseña" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>

            <!-- Formulario de Registro -->
            <div id="register-form" class="form-container" style="display: none;">
                <form>
                    <div class="mb-3">
                        <label for="register-nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="register-nombre" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-apellido1" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="register-apellido1" placeholder="Ingresa tu primer apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-apellido2" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="register-apellido2" placeholder="Ingresa tu segundo apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="register-email" placeholder="Ingresa tu correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="register-usuario" placeholder="Elige un nombre de usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="register-contraseña" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="register-contraseña" placeholder="Crea una contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Registrarse</button>
                </form>
            </div>

            <!-- Botón para alternar entre Login y Registro -->
            <div class="text-center mt-3">
                <button class="toggle-btn" onclick="toggleForms()">¿No tienes cuenta? Regístrate</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const formTitle = document.getElementById('form-title');
        const toggleButton = document.querySelector('.toggle-btn');

        function toggleForms() {
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
                formTitle.textContent = 'Iniciar Sesión';
                toggleButton.textContent = '¿No tienes cuenta? Regístrate';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                formTitle.textContent = 'Registrarse';
                toggleButton.textContent = '¿Ya tienes una cuenta? Inicia Sesión';
            }
        }

        // Opcional: Validación básica de formularios
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    form.classList.add('was-validated');
                }
            });
        });
    </script>
</body>
</html>
