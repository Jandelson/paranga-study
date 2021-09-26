### Base de conhecimento ###


## Stack de desenvolvimento:
# Instalação PHP7.4
sudo apt install php7.4 php7.4-mysql -y

Alterar Configuracoes Apache:
sudo xed /etc/apache2/sites-available/000-default.conf

Adicione a linha:
DocumentRoot /home/abrahao/Code/php/

sudo xec /etc/apache2/apache2.conf
Adicionar as linhas abaixo:
<Directory /home/abrahao/Code/php/>
	Options Indexes FollowSymLinks
	AllowOverride None
	Require all granted
</Directory>

Reinicie o apache:
sudo systemctl restart apache2

# Instalação Mysql 8.0
Seguir tutorial abaixo:
https://linuxhint.com/install-mysql-linux-mint-ubuntu/


# Possiveis erros:

Conexao com DBeaver

Erro: Public Key Retrieval is not allowed
        For Dbeaver
        Right click your connection, choose "Edit Connection"
        On the "Connection settings" screen (main screen) click on "Edit Driver Settings"
        Click on "Connection properties"
        Right click the "user properties" area and choose "Add new property"
        Add two properties: "useSSL" and "allowPublicKeyRetrieval"
        Set their values to "false" and "true" by double clicking on the "value" column


Obs: Homologado Linux Mint 20.2