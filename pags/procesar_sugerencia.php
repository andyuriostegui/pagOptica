<?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                include '../conexion.php'; // Incluye tu archivo de conexión

                // Recibe y sanitiza los datos del formulario
                $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
                $email = htmlspecialchars(trim($_POST['email'] ?? ''));
                $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

                // Inserta los datos en la tabla de sugerencias
                $sql_insert = "INSERT INTO sugerencias (nombre, email, mensaje) VALUES (?, ?, ?)";
                $stmt_insert = $conn->prepare($sql_insert);
                $stmt_insert->bind_param("sss", $nombre, $email, $mensaje);

                if ($stmt_insert->execute()) {
                    // Sugerencia enviada correctamente
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "¡Gracias!",
                                text: "Mensaje enviado correctamente.",
                                confirmButtonText: "Aceptar"
                            });
                          </script>';
                } else {
                    // Error al enviar la sugerencia
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "¡Error!",
                                text: "Error al enviar el mensaje. Por favor, inténtalo de nuevo.",
                                confirmButtonText: "Aceptar"
                            });
                          </script>';
                }

                // Cierra la conexión y el statement
                $stmt_insert->close();
                $conn->close();
            }
            ?>