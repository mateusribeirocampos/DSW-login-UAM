# Desenvolvimento de Software para Web - UAM

Uma interface de login para autenticar usuários de forma segura e eficiente. Este projeto oferece uma solução elegante e fácil de usar para a autenticação de usuários em aplicativos e sistemas, garantindo segurança e praticidade

## Instruções

Leia o tutorial [sobre Git](https://www.freecodecamp.org/portuguese/news/tutorial-de-git-e-github-controle-de-versao-para-iniciantes/). A documentação oficial do Git em português está disponível no site do [Git](https://git-scm.com/).

Crie sua conta no GitHub (ou use uma conta previamente criada, se já existir).

Visite o projeto do site do grupo e faça o fork do projeto para a sua conta no GitHub clicando no botão Fork no canto superior direito da tela.

Instale o git na sua máquina. Se o seu Sistema Operacional (SO) já possui o git em um pacote pronto, é extremamente recomendável instalá-lo através dos comandos do seu SO.

Acesse a linha de comando (Windows) ou abra um terminal (Linux ou macOS).

Crie um diretório onde você deseja instalar o projeto do site.

Crie um clone do seu fork no github, na sua máquina. A opção --recursive é importante neste caso:

```cmd
git clone --recursive https://github.com/<seu usuário do GitHub>/DSW-login-UAM.git
```

Crie um remote apontando pro repositório original:

```cmd
git remote add upstream https://github.com/osprogramadores/DSW-login-UAM.git
```

Crie um branch de trabalho com o commando:

```cmd
git checkout -b qualquerNome
```

Digite o comando git status e pressione enter ou return no teclado.

O git irá exibir uma mensagem semelhante a: modified: index.html

Use o comando:

```cmd
git add nome-arquivo
```

onde nome-arquivo deve ser substituído pelo nome do arquivo que foi modificado (incluindo o path/caminho para o arquivo).

Confirme suas modificações com o comando:

```cmd
git commit -m "Mensagem aqui". 
```

O texto deve ser sucinto e descritivo. Exemplos de boas e más descrições:

Envie suas modificações para o seu fork usando comando:

```cmd
git push origin desafio.
```

Acesse o fork do repositório DSW-login-UAM na sua conta do GitHub e solicite um Pull Request para o repositório do DSW-login-UAM

Visite a página do Pull Request e aguarde a validação. Podemos discutir qualquer problema no [Discord](https://discord.com/).

Algumas informações foram retiradas e modificadas do site dos [OsProgramadores](https://osprogramadores.com.br/).
