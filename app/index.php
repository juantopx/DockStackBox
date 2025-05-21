<?php
// Manejo del formulario
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Aquí podrías agregar validación o almacenamiento en una base de datos, por ejemplo.
    $success = true; // Simulamos que el mensaje se envió correctamente
    if ($success) {
        $message = "¡Gracias por tu mensaje, $name! Nos pondremos en contacto contigo pronto.";
    } else {
        $message = "Hubo un error al enviar tu mensaje. Intenta nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Web Básica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Bienvenido a Nuestra App Web</h1>
        
        <?php if (!empty($message)) : ?>
            <div class="alert <?= isset($success) && $success ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
        </div>

        <footer class="text-center mt-5">
            <p>&copy; 2025 Mi App Web</p>
        </footer>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
