# Ferramentas

Para hospedar o sistema é necessário ter o servidor web apache 2.4.41, php 8.0 e o banco PostgreSQL versão 14.03, instalados na máquina, além disso é preciso ter-se uma 
ferramenta de manipulaçao do banco, por exemplo o HeidiSQL, MySQL Workbench ou pgAdmin. Para o desenvolvimento fora utilizado o HeidiSQL.

Tendo as ferramentas, será necessário rodar o script das tabelas SQL no banco, e em seguida inserir o admin com a senha de sua preferência.

Acione o apache enviando a aplicação para a pasta htdochtml (via Xampp no Windows) ou www (via terminal no Linux).

Acesse o código do sistema e no caminho .../model/bd mude o usuário, a senha e o banco no arquivo variáveis. Com as variáveis configuradas, basta rodar a aplicação no localhost.


# Para rodar o site

- Instale o Apache;
- Instale o Php;
- Instale o PostgreSQL;
- Clone o repositório;
- Adicione o arquivo na pasta do apache (htdocs no windows, www no Linux);
- Extraia os arquivos do .zip;
- Entre na pasta "model";
- Entre na pasta "DB";
- Acessar o arquivo "Variáveis";
- - Modificar a linha 20 trocando ```define('HOST','ifbaiano');``` para ```define('HOST','localhost');```;
- - Modificar a linha 21 trocando ```define('USER','ifbaiano');``` para ```define('USER','usuário do seu banco de dados');```;
- - Modificar a linha 22 trocando ```define('PASS','ifbaiano');``` para ```define('PASS','Senha do seu banco de dados');```;
- - Modificar a linha 23 trocando ```define('BASE','ifbaiano');``` para ```define('BASE','banco de dados que está sendo utilizado');```;


## Instalando e configurando o Apache 2.4.41 no Linux

- Abra1 o terminal pressionando as teclas ```Ctrl``` + ```Alt``` + ```t```
- Digite o comando a seguir para fazer a instalação do apache2 e já mostrar a versão instalada;
```
sudo apt install apache2 && apache2 -v
```

- Entre na pasta "etc" e "apache2" para configurar os arquivos utilizados;
```
cd /etc
cd apache2
```

- Liste os arquivos e pastas;
```
ls
```

- Acesse o arquivo "apache2.config" e onde houver "Directory /var/www/" troque para o diretório(pasta) onde você está guardando seus arquivos, lembre-se de 
 colocar o caminho completo do diretório, por exemplo: "Directory /home/aluno/devweb/";
```
sudo nano apache2.conf
```

- Pressione as teclas ```Ctrl```+```o```, depois ```Enter```para salvar, e ```Ctrl```+```x``` para sair;
- Liste os arquivos e pastas;
```
ls
```

- Entre na pasta "sites-available" e liste os arquivos e pastas;
```
cd sites-available
ls
```

- Acesse o arquivo "000-default.conf" e onde houver "Directory /var/www/" troque para o diretório(pasta) onde você está guardando seus arquivos, lembre-se 
de colocar o caminho completo do diretório, por exemplo: "Directory /home/aluno/devweb/";
```
sudo nano 000-default.conf
```

- Start o apache;
```
sudo systemctl start apache2
```

- Acesse a pasta "html", liste os arquivos e pastas e remova o arquivo "index.html";
```
cd  /var/www/html/
ls
rm index.html
```

## Instalando e configurando o Apache 2.4.41 no Windows

- Faça o download do Apache HTTPD Web Server no site do Apache;
- Salve o arquivo em sua Área de Trabalho do Windows;
- Clique duas vezes no arquivo salvo;
- Clique em "Next >";
- Aceite os termos de licença;
- Clique novamente em "Next >";
- Na janela seguinte, clique novamente em "Next >";
- Agora, preencha os campos de texto com as seguintes informações:

    "Network Domain" (Domínio da Rede): localhost
    
    "Server Name" (Nome do Servidor): localhost
    
    "Administrator's Email Address" (Email do Administrador): seu endereço de email

- Selecione o botão "for all users, on port 80, as a service - recommended";
- Clique em "Next >";
- Depois de digitar o destino, clique em "OK" e em "Next>";
- Marque a opção "Apache HTTP Server";
- Clique no botão "change";
- Instale todos os pacotes e scripts no diretório C:\Server\Apache2\.
- Digite "C:\Server\APache2\" na caixa de texto "Folder name";
- Clique em "OK" e em seguida em "Next>";
- Clique em "Install";
- clique no botão "Finish".


## Instalando e configurando o PHP 8.0 no Linux

- Abra o terminal pressionando as teclas ```Ctrl``` + ```Alt``` + ```t```;
- Digite os comandos a seguir para fazer a instalação da versão específica do php 8.0;
```
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt install php8.0
```

## Instalando e configurando o PHP 8.0 no Windows

- Acesse o link https://php.net/downloads.php;
- Clique na área "Windows downloads" dentro do campo referente à versão 8.0;
![Captura de tela de 2022-06-29 13-44-22](https://user-images.githubusercontent.com/91372093/176529797-3e259093-39c9-4246-bdff-b26abcbeeba8.jpg)
- Escolha  plataforma do PHP Non Thread Safe(NTS) em relação ao seu computador, x86 ou x64;
- Mova o arquivo .zip da pasta "Download" para a paratição principal do seu computador (normalmente C:) e descompacte o arquivo;
- Renomeie a pasta para simplesmente php;
- Volte à página onde baixou o arquivo e faça o download do arquivo "VC" de acordo com o seu computador, x86 ou x64;
- Dentro da pasta descompactada no C:, renomeie o arquivo "php.ini-development" para somente "php.ini.";
- Abra o Painel de Controle;
- Vá em Sistema;
- Selecione a guia Avançado;
- Clique em Variáveis de ambiente no rodapé da janela;
- Na seção Variáveis do sistema, selecione Path;
- Clique em Editar;
- Em Valor da variável, vá até o final do campo de texto;
- Acrescente um ";" (ponto e vírgula) para finalizar os caminhos anteriores;
- Coloque "c:\php", então, ficará assim: ….;c:\php;
- Abra o menu iniciar;
- Selecione seu editor de texto com o botão direito do mouse;
- Clique em "Executar como administrador";
- Siga o caminho "C:\Windows\System32\drivers\etc";
- Abra o arquivo "hosts", se ele não aparecer, selecione "Todos os arquivos" para ele ser mostrado na janela;
- Verifique se existe a linha 127.0.0.1 localhost, se existir está pronto, senão acrescente-a ao final do arquivo, salve e feche o programa;
- Reinicie sua máquina;
- Digite ```prompt de comando``` ou ```cmd``` no menu de busca do windows;
- Digite:
```
php --version
php -S localhost:8080
```


## Instalando e configurando o PostgreSQL no Linux

- Abra o terminal pressionando as teclas ```Ctrl``` + ```Alt``` + ```t```;
- Digite os seguintes comandos:
```
apt-get install postgresql
# service postgresql initdb
# service postgresql start
# chkconfig postgresql on
```
- Atribua uma senha no usuário postgres do PostgreqSQL;
```
su postgres -c psql
ALTER USER postgres WITH PASSWORD 'senha';
\q
```



## Instalando e configurando o PostgreSQL no Windows

- Faça o download através do site oficial https://www.postgresql.org/download/windows/ ;
- Abra o instalador;
- Selecione "Next" ;
- Selecione "Next" novamente;
- Selecione os componentes que deseja instalar (pode manter todos sem problemas);
- Selecione "Next" ;
- Selecione "Next" novamente;
- Defina a senha de superuser do banco;
- Selecione "Next" ;
- Selecione "Next" novamente;
- Selecione a porta que o banco irá usar (pode manter a padrão desde que não entre em conflito com outras já utilizadas);
- Selecione "Next" ;
- Selecione a opção "Default";
- Selecione "Next" ;
- Selecione "Next" novamente;
- Desmarque a opção de abrir o stack builder;
- Selecione "Finish".
