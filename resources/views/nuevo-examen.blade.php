<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuevo examen</title>
	<style>
		body {
			color: #636b6f;
            font-family: 'Nunito', sans-serif;
            margin-left: 10%;
            margin-right: 10%;
		}
		
		.cabezera {
        	align-content: center;
        	align-items: center;
        	text-align: center;
        	font-size: 30px;
        	background-color: #fff;
        	width: 100%;
        	padding: 30px;
        	margin-top: 30px;
        }

        .ittoluca {
        	font-weight: bold;
        }

        .navegacion {
        	background-color: #E9E9E9;
        	box-shadow: 0px 2px 5px #000;
        	padding: 1px;
        }

        .menu-nav {
        	text-align: left;
        }

        .menu-item {
        	font-weight: bold;
        	text-decoration: none;
        	color: #636b6f;
        	padding: 14px;
        }

        .titulo {
            font-size: 30px;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .campos {
            padding: 20px;
            background-color: #fff;
            border: medium solid #C0C0C0;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .instrucciones {
        	padding: 20px;
            background-color: #fff;
            border: medium solid #C0C0C0;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .texto-instruccion {
        	text-align: left;
        	font-weight: bold; 
        	font-size: 22px;
        	margin-bottom: 10px;
        }

        .texto-campo {
        	font-size: 18px;
        	color: #000;
        	margin-left: 20px;
        }

        .opciones-basicas {
        	padding: 8px;
        	font-size: 16px;
        }

        .numero-reactivo {
        	margin-bottom: 6px;
        	font-weight: bold;
        	text-align: left;
        }

        .reactivo-parte-1 {
        	display: block;
        	position: absolute;
        	text-align: left;
        	max-width: 55%;
        }

        .reactivo-parte-2 {
        	display: block;
        	text-align: right;
        }
    </style>
</head>
<body>
	<!--
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    -->
    <!-- Cabezera -->
    <header class="cabezera">
    	<div class="logo-ittoluca">
    		
    	</div>
    	<div class="texto">
	    	<label class="ittoluca">INSTITUTO TECNÓLOGICO DE TOLUCA</label>
	    	<br>
	    	Generación de exámenes
    	</div>
    </header>

    <!-- Navegación -->
    <nav class="navegacion">
    	<ul class="menu-nav">
    		<a href="" class="menu-item">Inicio</a>
    		<a href="" class="menu-item">Nuevo examen</a>
    	</ul>
    </nav>

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

            		<label class="texto-campo">Número de reactivos:</label>
            		<select name="numero-de-reactivos" class="opciones-basicas">
            			<option value="0">Seleccione un número</option>
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