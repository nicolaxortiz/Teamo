<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL=StyleSheet HREF="css/css.css" TYPE="text/css" MEDIA=screen>
    <link rel="icon" type="image/png" href="img/GATOU.png">
    <title>GyN<3</title>
</head>
<body>
    <?php
        $page_name = "index";
    ?>

    <?php
        include "controlador.php";
        $numero_accesos = visitante($page_name);
        $dias = dias();
    ?>
    <header>
        <img src="img/GATOU.png" alt="">
        <div>Nuestra Pagina Web <3</div>
    </header>
    <nav>
        <div class="navhor">
            <ul>
                <li><a href="meses.html"> Meses </a></li>
                <li><a href="fotitos.html"> Fotitos </a></li>
                <li><a href="promesas.html"> Promesas </a></li>	
                <li><a href="spoti.html"> Spoti </a></li>
                <li><a href="mensajes.php"> Mensajes </a></li>
            </ul>
        </div>

        <div id="menu">
			<button id="botonazo"> <img src="img/menu.png"width="30px"> </button>
			<div id="down">
				<a href="meses.html"> Meses </a> 
				<a href="fotitos.html"> Fotitos </a> 
				<a href="promesas.html"> Promesas </a> 
                <a href="Spoti.html"> Spoti </a> 
                <a href="mensajes.php"> Mensajes </a> 
			</div>
		</div>
    </nav>
    <main>
        <div class="mainIzq">
            <img src="img/122.jpeg" class="fotoDias">

            <?php
                echo "<h1>Dias Juntos:</h1>";
                echo "<h2>", $dias , " ♡</h2>";
            ?>

            <br><br><br><br>

            <img src="img/123.png" class="mainIzqImg">  

            <br><br><br><br>

            <img src="img/124.png" class="mainIzqImg2"> 

            <br><br><br><br>

            <img src="img/125.png" class="mainIzqImg"> 

            <br><br><br><br>

            <img src="img/126.png" class="mainIzqImg2"> 

            <br><br><br><br>

            <img src="img/127.png" class="mainIzqImg"> 

            <br><br><br><br>

            <img src="img/128.png" class="mainIzqImg2"> 

            <br><br><br><br>

            <img src="img/129.png" class="mainIzqImg"> 

            <br><br><br><br><br><br>

            <img src="img/137.jpeg" class="fotoDias">
        </div>
        
        <article class="article2">

            <div class="contDiasMov">
                <?php
                    echo "<h1>Dias Juntos:</h1>";
                    echo "<h2>", $dias , " ♡</h2>";
                ?>
                
            </div>

            <div class="bonito">Holaaaaaaaaaaaa!</div>

            <br><br>

            Desde que empezó la pagina no habia cambiado nunca esta partecita, entonces me di cuenta que ya le tocaba.

            Es 13 de Mayo, ya llevamos 4 meses, la verdad bastante, pero poquito para todo lo que quiero contigo.

            <br><br>

            En todo este tiempo ya he conocido un poquito mas de ti, hemos tenido bastantes experiencias y hemos hecho muchas cosas juntos, nos hemos tomado muchas fotos, comimos helado muu,
            fuimos a la santoto, me hizo delineado, nos hemos dado muchisimos besitos, y sobre todo, nos hemos amado mucho :)

            <br><br>

            Cada dia que paso contigo me llena de mucha felicidad, me siento muy comodo estando a tu lado y algo dentro de mi corazoncito se pone muy feliz cuando se que estoy cerca tuyo. Nunca
            habia sentido esa felicidad, y mucho menos habia sentido lo que era amar tanto a una persona.

            <br><br>

            Ustd, Gaby, se convirtio en lo mas importante que tengo en la vida, mi niña preciosa, la pelada que me gusta mucho. No me salen mas palabras para decir lo que siento por ustd, porq de verdad
            son demasiadas, y me gusta mucho como cada dia que pasa te amo mas y mas, parece que cada dia sale algo nuevo de ti, que me hace amarte aun mas de lo que ya lo hacia.

            <br><br>

            Con el paso del tiempo tambien vienen cosas feitas, pero eso ya lo sabiamos :CCC, nos ha tocado feo y aparte los dos somos un par de tontos jajaja, pero ni modo somos chavos,
            pero de esos chavos que hablan las cosas y que nos ayudamos entre ambos. Se que es parte de la relacion que pasen esas cosas, y me siento feliz de que poco a poco superamos las
            cositas y lo hacemos hablando, ayudandonos y entendiendonos.

            <br><br>

            Lo que mas quiero en esta vida es estar para ti, ayudarte en tus momentos tristes y entenderte. Ten presente que siempre voy a estar para ti. Cada vez que sientas que no puedes
            seguir por favor no olvidee que aun estoy yo, y que haria todo lo posible para que tu estes mejor, estes feliz y que quieras seguir adelante. Digo todo eso porque precisamente
            tu te convertiste en mi razon para seguir, mi razon para pararme todos los dias y querer un futuro bonito C:

            <br><br>

            Finalmente quiero decir nuevamente, que eres el amor de mi vida, que eres lo mejor que me ha pasado y que quiero compartir todos los dias que tengo contigo. Gracias por enterderme,
            por hablar conmigo, por querer resolver las cosas y por siempre estar para mi. Se que aun nos faltan demasiadas cosas por aprender, pero si fueramos perfectos nada de esto tendria
            sentido y no estaria en mi el deseo de cada dia mejorar para ti, y de igual manera que tu mejores para mi. Te amo demasiado, Gaby mi amor mi niña preciosa!

            <br><br><br><br>


            <div class="bonito">Te amooOoooOOOo</div>

               
            <marquee behavior=alternate>
                <img src="img/2.png"class="mapache">
                
            </marquee>

            <br><br>

            <div class=cajacuenta>
                <h1>
            <?php
                echo "¡Has estado ", $numero_accesos, " veces en esta página :)!";
                ?>
                </h1>
            </div>
        </article>
    
    </main>
    <footer>
        
        <div class=titulo>Nicolas - Gaby - Nata</div>
        <br>
        <div>Familia Madrugar <3</div>
        
    </footer>
</body>
</html>