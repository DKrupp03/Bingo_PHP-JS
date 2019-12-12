let cartela = [];
let numerosSorteados = [];
let pontos = 0;
let i = 0;
let paragraph;

document.body.querySelector("#sorteio").style = "display:none;";

document.body.querySelector("#gerar").onclick = function() {
    let xhttp= new XMLHttpRequest();
    let j;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status==200){
            
            cartela = JSON.parse(this.responseText);
            

            for (j = 1; j <= cartela.length; j++) {
                paragraph = "#p"+j;
                document.body.querySelector(paragraph).innerHTML+=cartela[j-1];
            }

            document.body.querySelector("#gerar").style = "display:none;";
        }
        document.body.querySelector("#sorteio").style = "display:block;";
    };
    
    xhttp.open("GET", "gerar.php", true);
    xhttp.send();
}

//função pra sortear

document.body.querySelector("#sorteio").onclick = function() {
    let xhttp= new XMLHttpRequest();
    let paragraph;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status==200){
            
            if (i==0) {
                numerosSorteados = JSON.parse(this.responseText);
            }
        
            if(i<=74){
                document.body.querySelector("#sorteado").innerHTML += numerosSorteados[i] + "  |  ";

                for(j=0; j<25; j++){
                    if (numerosSorteados[i]==cartela[j]){
                        pontos++;
                        document.body.querySelector(`#p${j+1}`).style = "background-color: blue";
                        j=25;
                    }
                }

                i++;
            }
                
            
            if (pontos==cartela.length) {
                document.body.querySelector("#resultado").innerHTML = "Vitória! 25 pontos!";
                document.body.querySelector("#sorteio").style = "display:none;";
            } else if (i == 74) {
                document.body.querySelector("#resultado").innerHTML = "Derrota! " + pontos + " pontos!";
                document.body.querySelector("#sorteio").style = "display:none;";                
            }

        }
    }
    
    xhttp.open("GET", "sorteio.php", true);
    xhttp.send();
}



