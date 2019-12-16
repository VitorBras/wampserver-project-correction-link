# wampserver-project-correction-link
Corrija os links do seu projeto do Wampserver apenas incluindo esse código ou arquivo na index.php da pasta www do wampserver3.0.0+

Este simples código se trata de um corretor de links de projetos do Wampserver que ao você incluir no final do seu arquivo C:\wamp64\www\index.php sempre que você acessar a página inicial do Wampserver os links das pastas do seu projeto que lhe redirecionavam para o caminho errado(Exemplo: yourproject/) irão lhe redirecionar para http://localhost/yourproject ou http://127.0.0.1/yourproject corretamente como sempre teve de ser. O código é simples porém chato de desenvolver. Você assim como eu deve focar nas dificuldades do projeto em si e não em algoritmos que resolvam problemas de configurações de servidor que já deveriam estar pré-configuradas. Pra que programar mais se você pode pegar este código pronto? Foque no seu projeto. 


O código é em Javascript, e este javascript pega a URL que você já digitou para acessar a página inicial do Wampserver e reescreve todos os links de seus projetos disponíveis na tela inicial do Wampserver, facilitando para aqueles que acessam via tablet e smartphone. Se você já tentou entrar no Wampserver via tablet e smartphone já deve ter percebido que localhost não funciona de outro computador como tablet e smartphone. :(. Digite o IP só uma vez e quando for clicar na pasta será redirecionado para o local correto. Simples, e fácil. É só uma configuração pessoal.


___________COMO USAR

Baixe ou copie o código e salve na pasta C:\wamp64\www\index.php onde está a pasta raiz, www. No arquivo index.php da pasta raiz, não na pasta do seu projeto, inclua o arquivo que você criou e colou o código, você pode baixar e incluir o arquivo baixado inserindo o mesmo dentro da pasta raiz WWW e dentro do arquivo index.php padrão do Wampserver. Caso você baixe o arquivo ao invés de copiar e colocar o código no index.php, você precisa incluir o comando que aponta para o tal arquivo : include("wamp-project-links-correctionV1_0.php"); Ao fazer isto, os links dos seus projetos irão funcionar apartir do IP ou virtualhost que você digitou no URL. Boa sorte com seus projetos. :D

____________ENGLISH LANGUAGE


# wampserver-project-correction-link
Corrija os links do seu projeto do Wampserver apenas incluindo esse código na index.php da pasta www do wampserver3.0.0+

Este simples código se trata de um corretor de links de projetos do Wampserver que ao você incluir no final do seu arquivo C:\wamp64\www\index.php sempre que você acessar a página inicial do Wampserver os links das pastas do seu projeto que lhe redirecionavam para o caminho errado(Exemplo: yourproject/) irão lhe redirecionar para http://localhost/yourproject ou http://127.0.0.1/yourproject corretamente como sempre teve de ser. O código é simples porém chato de desenvolver. Você assim como eu deve focar nas dificuldades do projeto em si e não em algoritmos que resolvam problemas de configurações de servidor que já deveriam estar pré-configuradas. Pra que programar mais se você pode pegar este código pronto? Foque no seu projeto. 


O código é em Javascript, e este javascript pega a URL que você já digitou para acessar a página inicial do Wampserver e reescreve todos os links de seus projetos disponíveis na tela inicial do Wampserver, facilitando para aqueles que acessam via tablet e smartphone. Se você já tentou entrar no Wampserver via tablet e smartphone já deve ter percebido que localhost não funciona de outro computador como tablet e smartphone. :(. Digite o IP só uma vez e quando for clicar na pasta será redirecionado para o local correto. Simples, e fácil. É só uma configuração pessoal.


# wampserver-project-correction-link
Correct your Wampserver project links by just including this code in the index.php of the wampserver3.0.0 + www folder.

This simple code is a Wampserver project link broker that when you include at the end of your C: \ wamp64 \ www \ index.php file whenever you go to the Wampserver home page the links from your project folders that redirecting you to the wrong path (Example: yourproject /) will redirect you to http: // localhost / yourproject or http://127.0.0.1/yourproject correctly as it always had to be. The code is simple but boring to develop. You and I should focus on the difficulties of the project itself and not on algorithms that solve server configuration problems that should already be pre-configured. Why program more if you can get this code ready? Focus on your project.


The code is in Javascript, and this javascript takes the URL you already entered to access the Wampserver home page and rewrites all links to your projects available on the Wampserver home screen, making it easy for those who access via tablet and smartphone. If you have tried to sign in to Wampserver via tablet and smartphone you may have noticed that localhost does not work from another computer such as tablet and smartphone. :(. Enter the IP only once and when you click on the folder you will be redirected to the correct location. Simple and easy. It's just a personal setup.

Se você tem uma solução melhor, evie seu feedback 
Versão 1.0

