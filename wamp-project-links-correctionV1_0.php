

<?php

$wampplc = <<< EOPAGEA

<script>
//___________________________________SESSÂO PROGRAMADA POR Vitor Bras (V1.0) 
/* Este pequeno código é uma aplicação que serve para corrigir os links dos projetos Wampserver.
Se trata de um código que será implementado na página inicial do Wampserver para ajustar os links de acordo com o que
está escrito na URL do navegador de onde se acessa o Wampserver. Podendo ser do celular,tablet,tv ou qualquer outro
dispositivo. A aplicação é um código javascript que captura dados da URL do navegador onde está contida o IP/IPV4 que 
utilizamos e temos de escrever para acessar o servidor através de um outro dispositivo.
Desenvolvi esse código porque não consigo achar a função que me possibilita só com o clique na pasta do projeto 
abrir a pasta respectiva do projeto pois o wampserver me passa o link errado. 
 É chato ter que digitar o IPV4 que muitas vezes muda pois as vezes queremos mostrar o projeto pra alguém, e 
 utilizamos o celular como ponto de acesso e assim o IPV4 muda. 

Nome: Wampserver Project Correction link
Version Code: 1.0
Programmer/Programador: Vitor Bras 
Website: portfolio.vitorbras.ga            *without WWW please..
Website2(portfolio): Github.com/vitorbras
Data e Hora programada: 16/12/2019 11:50
Fonte no repositório: ----------- LEMBRAR DE PUBLICAR AQUI O LINK DESTE CÓDIGO QUE SERÀ PUBLICADO NO GITHUB

*/ 

var listaPROJETOS = document.querySelector(".projects");
var texto1 = "http://www.google.com";
var texto2;
var newLINKS = [];
var iters = {i:null,i2:null};
var itemFILHO = 0;
var numFILHOS = listaPROJETOS.childElementCount;
var texto3 = [];
var texto4 = []; //Harmazenador de procolo
var subString;
var projectLINKS;
//Iterando entre FILHOS do elemento HTML onde estão as tags de links para projetos
for(i3=0;i3<numFILHOS;i3++){
	projectLINKS = listaPROJETOS.children[i3].children[0].getAttribute("href");
	//Iniciando a operação no FILHO específico
	//subString = texto3[i3];console.log("VALOR AGORA DE TEXTO3 "+texto3[i3]);
	texto2 = window.location.href; //Capturo a URL Incluindo o IP(IPV4) do cliente para substituição de links
	//Identificando e anulando protocolo encontrado na URL de LINKS DE PROJETOS
	for(i=0,checkingLoop=true;checkingLoop == true;i++){
		if(projectLINKS[i] !== ":"){
			if(texto4[i3] !== undefined){texto4[i3] += projectLINKS[i];}else{texto4[i3] = projectLINKS[i];}

		}else{
			checkingLoop = false;
			console.log(projectLINKS + " Tamanho:" + projectLINKS.length);
			iters.i = i;
		}

		//Anti loop infinito
		if((i) == projectLINKS.length){checkingLoop = false; 
			console.log("Anti-loop infinito ativado!");
			
			
			function retornar(){return true;} 
			retornar();
		}
	}

	for(i2=0,checkingLoop2=true;checkingLoop2 == true;i2++){console.log("FOR 2: trabalhando.");
		
		
		
		//Anti-Loop infinito
		if(i2 == projectLINKS.length){checkingLoop2 = false;
			console.log(newLINKS);
			console.log("Anti-Loop Infinito FOR 2 : ativado!(obrigatório ativar);");
		}
		checkingLoop2 = false;
	}
	//Capturando caracteres menos os caracteres iniciais que incluem o protocolo.
	for(i4=texto4[i3].length+3;i4<projectLINKS.length;i4++){
		if(texto3[i3] !== undefined){ texto3[i3] += projectLINKS[i4]; }else{ texto3[i3] =  projectLINKS[i4];;}
	}
	if(newLINKS[i3] !== undefined){newLINKS[i3] += texto2[i2];}else{newLINKS[i3] = texto2;
			if(texto2[texto2.length-1] !== "/"){newLINKS[i3] += "/";}
			//Inserindo o link do projeto
			newLINKS[i3] += texto3[i3];
			projectLINKS = listaPROJETOS.children[i3].children[0].setAttribute("href",newLINKS[i3]);
		}


	//Fim das operações em filhos específicos.

	//Anti-Loop Infinito (Apesar de não ser tão complexo achei bonitinho escrever esse comando. kskskskk :D )
	if(i3 > 1000){break;}
}

</script>

EOPAGEA;

print($wampplc);

?>