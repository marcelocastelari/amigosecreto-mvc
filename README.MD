O programa foi criado com a Linguagem PHP na sua versão 7.4

O sistema foi criado com a intenção de simular um sorteio de amigo secreto, onde é possível Cadastrar, Editar e Deletar
nomes e e-mails das pessoas a serem sorteadas.

Na página Index, é listado o nome e e-mail das pessoas já cadastradas, juntamente com os botões de ação (Editar e Excluir)

<p align="center">
    <img src="public/assets/to_readme/home.png" />
</p>

Para realizar o cadastro, o usuário é levado a uma página onde deve inserir os dados Nome e E-mail. O E-mail precisa ser único e válido para o sistema aceitar a inserção, caso contrário será exibido mensagem de erro.

<p align="center">
    <img src="public/assets/to_readme/cadastro.png" />
</p>

O usuário poderá fazer uma pesquisa de usuários cadastrados no campo de Busca, localizado logo abaixo dos botões de Cadastro e Sorteio. Ao digitar o nome ou e-mail da pesso que se deseja encontrar no sistema, a pessoa será redirecionada para uma nova página onde será exibido os dados conforme pesquisado.

<p align="center">
    <img src="public/assets/to_readme/busca.png" />
</p>

Ao clicar no botão SORTEIO, o sistema realizará aleatoriamente o sorteio e em uma nova página exibirá os nomes da dupla sorteada como amigo secreto.

<p align="center">
    <img src="public/assets/to_readme/sorteio.png" />
</p>

## Importante

Ao descompactar, é necessário rodar o composer pra instalar as dependências e gerar o autoload.
Vá até a pasta do projeto, pelo prompt/terminal e execute:
composer install
Depois é só aguardar.


## Configuração

Todos os arquivos de configuração e aplicação estão dentro da pasta src.
As configurações de Banco de Dados e URL estão no arquivo src/Config.php

É importante configurar corretamente a constante BASE_DIR:
const BASE_DIR = '/PastaDoProjeto/public';



## Uso

Você deve acessar a pasta public do projeto.