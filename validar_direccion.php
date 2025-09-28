<?php
// Función para validar una dirección
function validarDireccion($direccion) {
    // Elimina espacios en blanco al inicio y final
    $direccion = trim($direccion);

    // Verifica que no esté vacía
    if (empty($direccion)) {
        return "La dirección no puede estar vacía.";
    }

    // Verifica que tenga al menos una calle y un número (ejemplo simple)
    if (!preg_match("/[a-zA-Z]+\\s+[0-9]+/", $direccion)) {
        return "La dirección debe contener una calle y un número (ej: 'Av. Central 123').";
    }

    // Verifica longitud mínima
    if (strlen($direccion) < 5) {
        return "La dirección es demasiado corta.";
    }

    return "Dirección válida.";
}

// Ejemplo de uso
$direccionEjemplo = "Av. Central 123";
echo validarDireccion($direccionEjemplo);
?>
