<?php
$usuario_valido = 'admin';
$contraseña_valida = '12345';

$usuario = $_POST['username'] ?? '';
$contraseña = $_POST['password'] ?? '';

if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
    setcookie('username', $usuario, time() + 604800, "/");
    setcookie('password', $contraseña, time() + 604800, "/");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <?php if ($usuario === $usuario_valido && $contraseña === $contraseña_valida): ?>
                            <h2 class="text-success">Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h2>
                        <?php else: ?>
                            <h2 class="text-danger">Usuario o contraseña incorrectos</h2>
                            <a href="index.php" class="btn btn-primary mt-3">Volver al login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
