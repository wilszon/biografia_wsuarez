<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía - Wilson Suárez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            background: linear-gradient(135deg, #111, #222 60%, #333);
            min-height: 100vh;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: auto;
            padding: 100px 20px;
            background: linear-gradient(135deg, #000 0%, #333 100%);
        }

        .hero-img {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-img img {
            width: 280px;
            height: 280px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid cyan;
            box-shadow: 0 0 25px cyan;
        }

        .hero-text {
            flex: 1;
            padding: 2rem;
        }

        .hero-text h1 {
            font-size: 2.8rem;
            font-weight: bold;
            color: cyan;
            white-space: nowrap;
        }

        .hero-text h2 {
            font-size: 1.8rem;
            color: #aaa;
        }

        .hero-text p {
            margin-top: 1rem;
            color: #ddd;
            font-size: 1.1rem;
        }

        .section-divider {
            border: 0;
            height: 2px;
            background: cyan;
            margin: 3rem auto;
            width: 50%;
            /* espacio arriba y abajo */
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <section class="hero">
        <!-- Imagen a la izquierda -->
        <div class="hero-img">
            <img src="foto_1.jpg" alt="Wilson Suarez">
        </div>

        <!-- Texto a la derecha -->
        <div class="hero-text">
            <h1>Wilson Andres Suárez Mantilla</h1>
            <h2>Estudiante de Ingeniería de Sistemas</h2>
            <p>
                Bienvenido a mi biografía. Aquí comparto mi historia, mi formación académica,
                mi experiencia y mis aspiraciones futuras.
            </p>
        </div>
    </section>

    <hr class="section-divider">

</body>

</html>
