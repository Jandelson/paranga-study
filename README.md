# Bem vindo ao Paranga Study law

## Projeto agenda
#### Observações Gerais


Pessoal, vão na aba projects para observações gerais de como começar!


# Stack Desenvolvimento

# **Instalação PHP7.4**

sudo apt install php7.4 php7.4-mysql php7.4-xdebug -y

**Alterar Configuracoes Apache:**

`sudo xed /etc/apache2/sites-available/000-default.conf`

Adicione a linha:

`DocumentRoot /home/abrahao/Code/php/`

**Editando apache2.conf:**

`sudo xed /etc/apache2/apache2.conf`

Adicionar as linhas abaixo:

`<Directory */home/abrahao/Code/php/*>`

`Options Indexes FollowSymLinks`

`AllowOverride None`

`Require all granted`

`</Directory>`

**Configurando xdebug:**

`sudo xed /etc/php/7.4/apache2/conf.d/20-xdebug.ini`

Adicione as linhas abaixo:

`zend_extension=[xdebug.so](http://xdebug.so/)
xdebug.mode=develop,coverage,debug
xdebug.discover_client_host=true
xdebug.client_port=9000
xdebug.start_with_request=yes`

**Obs: não esqueça de alterar no lauch.json do projeto (vscode) para ouvir o depurador na porta 9000**

Reinicie o apache:

sudo systemctl restart apache2

**# Instalação Mysql 8.0**

Seguir tutorial abaixo:

https://linuxhint.com/install-mysql-linux-mint-ubuntu/