# Início rápido de instalação

## Pré-requisitos

  * Navegador compatível com JQuery (quase todos!)
  * Um servidor com:
    * php> = 5.3.0 ([estrutura Slim](https://github.com/codeguy/Slim/blob/master/README.markdown#system-requirements) dependência)
    * servidor apache com mod_rewrite e .htaccess habilitado (AllowOverride All)
    * acesso de gravação a phpfreechat-2.1.1 / server / data / e phpfreechat-2.1.1 / server / log / pasta (777 ou permissão de gravação para o servidor web)
  * Nenhum banco de dados necessário!

## Começo rápido

Baixe [phpfreechat-2.1.1.zip](http://www.phpfreechat.net/download) e descompacte-o na pasta raiz do seu servidor web.

JQuery deve ser incluído em seu html `<head>` antes do código phpfreechat:
`` `html
  <script src = "/ phpfreechat-2.1.1 / client / lib / jquery-1.8.2.min.js" type = "text / javascript"> </script>
`` `
Inclua o plugin phpfreechat em seu html `<head>`:
`` `html
  <link rel = "stylesheet" type = "text / css" href = "/ phpfreechat-2.1.1 / client / themes / default / pfc.min.css" />
  <script src = "/ phpfreechat-2.1.1 / client / pfc.min.js" type = "text / javascript"> </script>
`` `

Adicione este pedaço de HTML em seu `<body>` onde você deseja que o chat seja exibido:
`` `html
...
<div id = "mychat"> <a href="http://www.phpfreechat.net"> Criação de salas de bate-papo em qualquer lugar - phpFreeChat </a> </div>
...
`` `
Em seguida, adicione este trecho de código logo após (ele conectará o bate-papo na página):
`` `html
<script type = "text / javascript">
  $ ('# mychat'). phpfreechat ({serverUrl: '/phpfreechat-2.1.1/server'});
</script>
`` `
## Personalização de temas
phpfreechat é lançado com poucos temas. Você pode escolher qual deseja usar:
* `default`
* `carbono`
* `gamer`
* `phpfreechat`
* `phpfreechat-mini`
Para selecionar o tema, você só precisa alterar uma linha em seu html `<head>`. Para usar o tema `default`:
`` `html
  <link rel = "stylesheet" type = "text / css" href = "/ phpfreechat-2.1.1 / client / themes / default / pfc.min.css" />
`` `
ou este código para o tema `carbon`:
`` `html
  <link rel = "stylesheet" type = "text / css" href = "/ phpfreechat-2.1.1 / client / themes / carbon / pfc.min.css" />
`` `