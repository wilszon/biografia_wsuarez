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
            width: 450px;
            height: 450px;
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

        .section-box {
            background: rgba(255, 255, 255, 0.05);
            /* un toque transparente sobre el fondo gris */
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            color: white;
            /* texto en blanco */
        }

        .section-box h2 {
            color: cyan;
            margin-bottom: 1rem;
            font-size: 1.8rem;
            text-align: center;
        }

        .section-box p {
            color: #ddd;
            /* gris claro para el texto */
            font-size: 1rem;
            line-height: 1.6;
            text-align: center;
            margin: 0 auto;
            max-width: 700px;
        }
    </style>
</head>

<body>

    <section class="hero">
        <!-- Imagen a la izquierda -->
        <div class="hero-img">
            <img src="foto_111.jpg" alt="Wilson Suarez">
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

    <section class="section-box" id="origen">
        <h2>Lugar de Nacimiento y Procedencia</h2>
        <p>
            Nací en <strong>Floridablanca, Santander (Colombia)</strong>, el <strong>3 de mayo del 2001</strong>.
            Vivo con mis padres, <strong>Diana María Mantilla Chacón</strong> y <strong>Wilson Suárez Jaimes</strong>.
            No tengo hermanos, por lo que mi familia está compuesta únicamente por mis padres y yo.
        </p>
        <br>
        <div class="hero-img">
            <img src="foto_2.jpg" alt="Wilson Suarez">
        </div>
    </section>

    <hr class="section-divider">


    <section class="section-box" id="infancia">
        <h2>Mi Niñez</h2>
        <p>
            Mi infancia estuvo llena de momentos especiales y cambios de ciudad que marcaron mi crecimiento.
            Durante tres años viví en <strong>Barranquilla</strong>, luego pasé cinco años en <strong>Santa
                Marta</strong> y, finalmente, en el año <strong>2010</strong> llegué a <strong>Bucaramanga</strong>,
            lugar donde me he quedado desde entonces.
        </p>
        <p>
            Fueron años muy bonitos: me encantaba <strong>jugar al fútbol</strong>, pasar tiempo en el parque y
            compartir salidas con mis padres.
            En Santa Marta tuve una experiencia muy especial, pues allí llegó a mi vida mi primera mascota, un perro
            llamado <strong>Toby</strong>, quien me acompañó en muchas aventuras y me enseñó lo valioso de tener un
            amigo fiel.
            Mi niñez, en general, la recuerdo con mucha alegría, rodeada de cariño, juegos y aprendizajes que han dejado
            huella en lo que soy hoy en día.
        </p>
        <br>
        <div class="hero-img">
            <img src="foto_3.jpg" alt="Wilson Suarez">
        </div>
    </section>

    <hr class="section-divider">

    <section class="section-box" id="adolescencia">
        <h2>Mi Adolescencia</h2>
        <p>
            Mi adolescencia la viví en el <strong>Colegio José Elías Puyana</strong>, donde conocí grandes personas con
            las que aún mantengo amistad y que hicieron de esta etapa algo muy especial. Fue allí donde poco a poco
            descubrí mi gusto por la <strong>tecnología</strong> y los <strong>videojuegos</strong>, intereses que se
            convirtieron en parte fundamental de mi vida y me motivaron a elegir mi camino profesional. Recuerdo con
            cariño mi paso por <strong>onceavo grado</strong>, un año lleno de aprendizajes, preparación y sueños por
            cumplir, mientras compartía momentos inolvidables con mis compañeros, participaba en actividades del colegio
            y aprendía el valor del esfuerzo constante. Sin duda, esta etapa fue una de las más bonitas de mi vida y
            dejó recuerdos que aún me acompañan.
        </p>
        <br>
        <div class="hero-img">
            <img src="foto_4.jpg" alt="Wilson Suarez">
        </div>
    </section>

    <hr class="section-divider">

    <section class="section-box" id="actualidad">
        <h2>Actualidad</h2>
        <p>
            Actualmente me encuentro cursando el <strong>quinto semestre de Ingeniería de Sistemas en la Universidad
                Autónoma de Bucaramanga (UNAB)</strong>, etapa en la que estoy completamente enfocado en mi formación
            profesional y en alcanzar la meta de graduarme como ingeniero. Este proceso me ha permitido adquirir nuevos
            conocimientos, desarrollar habilidades prácticas en programación y tecnología, y fortalecer mi disciplina
            académica. Aunque gran parte de mi tiempo lo dedico a los estudios, también busco equilibrar mi vida
            personal con actividades que me apasionan y me motivan a seguir adelante.
        </p>
        <br>
        <div class="hero-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN2xAmDcywQ-zIBEbMdNHtiP0PA6A0Cx8sAg&s"
                alt="Wilson Suarez">
        </div>
    </section>

    <hr class="section-divider">

    <section class="section-box" id="metas">
        <h2>Metas y Aspiraciones</h2>
        <p>
            Entre mis principales metas se encuentra culminar mi carrera de <strong>Ingeniería de Sistemas</strong> y,
            de manera inmediata, continuar con una <strong>maestría enfocada en desarrollo de software</strong>, área
            que me apasiona y en la que deseo especializarme. También aspiro a mejorar mis habilidades en
            <strong>inglés</strong> para fortalecer mi comunicación y abrirme a mejores oportunidades laborales a nivel
            internacional. Otro de mis grandes sueños es <strong>viajar por el mundo</strong>, con especial interés en
            conocer <strong>Japón</strong>, un país que siempre me ha llamado la atención por su cultura y avances
            tecnológicos. Más allá de lo profesional, mi objetivo es alcanzar una vida equilibrada en la que pueda tener
            un buen empleo, estabilidad económica y, sobre todo, la tranquilidad de disfrutar lo que hago cada día.
        </p>
        <br>
        <div class="hero-img">
            <img src="https://media.istockphoto.com/id/1223320690/es/foto/tokyo-rush-hour-commuters-calles-nocturnas-de-ne%C3%B3n-de-shimbashi-jap%C3%B3n.jpg?s=612x612&w=0&k=20&c=a-6P4MzH1t55yydEuVoJr7zrxTqJrtxKe8kPYv0EvZ0="
                alt="Tokyo">
        </div>
    </section>

    <hr class="section-divider">




</body>

</html>
