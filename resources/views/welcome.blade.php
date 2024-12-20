<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h1>Consumiendo API externa desde Laravel</h1>


            <div class="container">
                {{-- <h2>Listado de docentes</h2>
                <ul>
                    @foreach ($docentes_java as $docente)
                        <li>{{$docente['nombre']}} - Edad {{$docente['edad']}} - email: {{$docente['email']}}</li>
                    @endforeach
                </ul> --}}

                <div class="container mt-4">
                    <h2>Suscribete al newsletter</h2>

                    <div class="container mt-3">
                        <form action="{{route('contacto')}}" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Nombre">
                            <input type="email" name="email" placeholder="Correo">
                            <textarea name="nota" id="" cols="30" rows="10" placeholder="Agregar nota"></textarea>
                            <input type="submit" class="btn btn-primary" value="Suscribirme!">
                        </form>
                    </div>
                </div>

            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
