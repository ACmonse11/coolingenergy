<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva solicitud de proveedor</title>
</head>

<body style="margin:0;padding:30px;background:#F6F8F9;font-family:Arial,sans-serif;">

    <div style="max-width:650px;margin:auto;background:#FFFFFF;padding:35px;border-top:5px solid #044C7F;">

        <p style="color:#E31F1E;font-size:12px;font-weight:bold;">
            COOLING ENERGY
        </p>

        <h1 style="color:#044C7F;font-size:25px;">
            Nueva solicitud de proveedor
        </h1>

        <p style="color:#555;line-height:1.7;">
            Se ha recibido una nueva solicitud de una empresa
            interesada en formar parte de nuestra red de proveedores.
        </p>

        <hr style="border:0;border-top:1px solid #DDD;">

        <h3 style="color:#009ABD;">
            Datos de la empresa
        </h3>

        <p><strong>Empresa:</strong> {{ $datos['empresa'] }}</p>

        <p><strong>Contacto:</strong> {{ $datos['contacto'] }}</p>

        <p><strong>Correo:</strong> {{ $datos['email'] }}</p>

        <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>

        <hr style="border:0;border-top:1px solid #DDD;">

        <h3 style="color:#009ABD;">
            Información comercial
        </h3>

        <p>
            <strong>Especialidad:</strong>
            {{ $datos['categoria'] }}
        </p>

        <p><strong>Información adicional:</strong></p>

        <p style="color:#555;line-height:1.7;white-space:pre-line;">{{ $datos['mensaje'] ?? 'No proporcionada.' }}</p>

        <hr style="border:0;border-top:1px solid #DDD;">

        <h3 style="color:#009ABD;">
            Catálogo comercial
        </h3>

        <p style="color:#555;">
            El catálogo PDF de la empresa se encuentra
            adjunto a este correo.
        </p>

        <div style="margin-top:30px;padding-top:20px;border-top:1px solid #DDD;">

            <p style="font-size:12px;color:#777;">
                Este mensaje fue generado automáticamente
                desde el formulario de proveedores de
                Cooling Energy.
            </p>

            <p style="font-size:12px;color:#044C7F;font-weight:bold;">
                COOLING ENERGY | Ingeniería & Mantenimiento
            </p>

        </div>

    </div>

</body>
</html>
