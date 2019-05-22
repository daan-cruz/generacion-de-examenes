<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo examen</title>
    <link href="{{ asset('/css/azar.css') }}" rel="stylesheet">
</head>
<body>

<!-- Cabezera -->
@include('componects.header')
@include('componects.navbar')

<!-- Contenido -->
<section class="contenido">
    <div class="titulo">
        Nuevo examen
    </div>
    <div class="formulario">
        <form action="generar-examen.php" method="post">
            <!--
            Materia
            <br>
            <input type="text" name="materia">
            -->
            <div class="texto-instruccion">
                <label class="instruccion">Introduce los siguientes campos correspondientes</label>
            </div>
            <div class="campos">
                <label class="texto-campo">Materia:</label>
                <select name="materia" class="opciones-basicas">
                    <option value="materia-1">Cálculo diferencial</option>
                </select>

                <label class="texto-campo">Tema</label>
                <select name="tema" class="opciones-basicas">
                    <option value="tema-0">Seleccione un tema</option>
                    <option value="tema-1">1: Número reales</option>
                    <option value="tema-2">2: Funciones</option>
                    <option value="tema-3">3: Limites y continuidad</option>
                    <option value="tema-4">4: Derivadas</option>
                    <option value="tema-5">5: Aplicaciones de la derivada</option>
                </select>

                <div class="row">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="texto-campo">Número de reactivos:</label>
                            <input class="form-control">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="texto-campo">Baja:</label>
                            <input class="form-control">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="texto-campo">Media:</label>
                            <input class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="texto-campo">Alta:</label>
                            <input class="form-control">

                        </div>
                    </div>

                </div>
            </div>

            <div class="texto-instruccion">
                <label class="instruccion">Selecciona la instrucción y el nivel de los ejercicios</label>
            </div>

            <div class="instrucciones">
                <div class="numero-reactivo">
                    Reactivo 1
                </div>
                <div class="reactivo-parte-1">
                    <label class="texto-campo">Instrucción:</label>
                    <select name="nivel-bajo" class="opciones-basicas">
                        <option value="0">Selecciona una instrucción</option>
                        <option value="1">Instrucción 1</option>
                        <option value="2">Instrucción 2</option>
                        <option value="3">Instrucción 3</option>
                        <option value="4">Instrucción 4</option>
                        <option value="5">Instrucción 5</option>
                        <option value="6">Instrucción 6</option>
                        <option value="7">Instrucción 7</option>
                        <option value="8">Instrucción 8</option>
                        <option value="9">Instrucción 9</option>
                        <option value="10">Instrucción 10</option>
                    </select>
                </div>

                <div class="instrucciones">
                    <div class="numero-reactivo">
                        Reactivo 2
                    </div>
                    <div class="reactivo-parte-1">
                        <label class="texto-campo">Instrucción:</label>
                        <select name="nivel-bajo" class="opciones-basicas">
                            <option value="0">Selecciona una instrucción</option>
                            <option value="1">Instrucción 1</option>
                            <option value="2">Instrucción 2</option>
                            <option value="3">Instrucción 3</option>
                            <option value="4">Instrucción 4</option>
                            <option value="5">Instrucción 5</option>
                            <option value="6">Instrucción 6</option>
                            <option value="7">Instrucción 7</option>
                            <option value="8">Instrucción 8</option>
                            <option value="9">Instrucción 9</option>
                            <option value="10">Instrucción 10</option>
                        </select>
                    </div>
                    <div class="reactivo-parte-2">
                        <label class="texto-campo">Bajo:</label>
                        <select name="nivel-bajo" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                        <label class="texto-campo">Medio:</label>
                        <select name="nivel-medio" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                        <label class="texto-campo">Alto:</label>
                        <select name="nivel-alto" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="instrucciones">
                    <div class="numero-reactivo">
                        Reactivo 3
                    </div>
                    <div class="reactivo-parte-1">
                        <label class="texto-campo">Instrucción:</label>
                        <select name="nivel-bajo" class="opciones-basicas">
                            <option value="0">Selecciona una instrucción</option>
                            <option value="1">Instrucción 1</option>
                            <option value="2">Instrucción 2</option>
                            <option value="3">Instrucción 3</option>
                            <option value="4">Instrucción 4</option>
                            <option value="5">Instrucción 5</option>
                            <option value="6">Instrucción 6</option>
                            <option value="7">Instrucción 7</option>
                            <option value="8">Instrucción 8</option>
                            <option value="9">Instrucción 9</option>
                            <option value="10">Instrucción 10</option>
                        </select>
                    </div>
                    <div class="reactivo-parte-2">
                        <label class="texto-campo">Bajo:</label>
                        <select name="nivel-bajo" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                        <label class="texto-campo">Medio:</label>
                        <select name="nivel-medio" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                        <label class="texto-campo">Alto:</label>
                        <select name="nivel-alto" class="opciones-basicas">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

        </form>
    </div>
</section>

<!-- Pie de página -->
<footer>

</footer>
</body>
</html>