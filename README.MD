O programa foi criado com a Linguagem PHP na sua versão 7.4

O sistema foi criado com a intenção de simular um sorteio de amigo secreto, onde é possível Cadastrar, Editar e Deletar
nomes e e-mails das pessoas a serem sorteadas.

Na página Index, é listado o nome e e-mail das pessoas já cadastradas, juntamente com os botões de ação (Editar e Excluir)

<p align="center">
    <img width="460" src="public/assets/images/to_readme/home.png" />
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