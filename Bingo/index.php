<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./styles/style.css">
        <title>Bingo</title>
    </head>

    <header>
        <p id="titulo">BINGO DA INFO!</p>
        <p id="como">COMO JOGAR?</p>
        <p id="regras">O bingo consiste em um jogo simples, que utiliza uma cartela e números sorteados. A 
            cartela possui 25 números diferentes de 1 a 99 e são sorteados 75 números de 1 a 99. O objetivo
            do jogo é ter todos os números da cartela sorteados, então, quando isso acontece o jogador
            vence. Caso todos os números não serem sorteados nas 75 rodadas, os jogador perde.</p>
    </header>

    <body>
        <button id="gerar" class="row">Gerar Cartela</button>

        <table>
            <tr>
                <td id="p1"></td>
                <td id="p2"></td>
                <td id="p3"></td>
                <td id="p4"></td>
                <td id="p5"></td>
            </tr>
            <tr>
                <td id="p6"></td>
                <td id="p7"></td>
                <td id="p8"></td>
                <td id="p9"></td>
                <td id="p10"></td>
            </tr>
            <tr>
                <td id="p11"></td>
                <td id="p12"></td>
                <td id="p13"></td>
                <td id="p14"></td>
                <td id="p15"></td>
            </tr>
            <tr>
                <td id="p16"></td>
                <td id="p17"></td>
                <td id="p18"></td>
                <td id="p19"></td>
                <td id="p20"></td>
            </tr>
            <tr>
                <td id="p21"></td>
                <td id="p22"></td>
                <td id="p23"></td>
                <td id="p24"></td>
                <td id="p25"></td>
            </tr>
        </table>
        
        <div id="dir" class="row">
            <p id="resultado" class="row"></p>
            <button id="sorteio" class="row">Sortear número</button>
            <p id="sorteado" class="row"></p>
        </div>
        
        <script src="scripts.js"></script>
    </body>

</html>