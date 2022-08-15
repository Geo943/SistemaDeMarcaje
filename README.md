# SistemaDeMarcaje
Proyecto 1, Sistema de marcaje web que esta conformado por el frontend  Angular 13,backend Laravel 9


# Instalación en WEB-APP FreeBSD (192.168.1.30)

--instalacion y configuración de nginx

Creacin de usuario dev
  adduser dev pass: dev grupo wheel
  
Configuración SSH

Cambio de ip estatica en archivo /etc/rc.conf (ip 1.30 para server app)
    ifconfig_vmx0="inet 192.168.1.30 netmask 255.255.252.0"
    defaultrouter="192.168.1.30"
    
  pkg install nano
  
  pkg install nginx
    echo 'nginx_enable="YES"' >> /etc/rc.conf
    /usr/local/etc/rc.d/nginx start
    usuario dev para desarrollo
    creacion de directorio para archivos /wwwapp/
      solo permisos para usuario dev
      chown -R dev:dev /wwwapp/
      chmod -R 777 /wwwapp/
    agregar ruta de domino
      mkdir /usr/local/etc/nginx/vdomains/
      nano /usr/local/etc/nginx/vdomains/http.192.168.1.30.conf
      Agregar:
        server {
                server_name 192.168.1.30;
                access_log  /var/log/nginx/192.168.1.30.access.log; 
                error_log  /var/log/nginx/192.168.1.30.error.log;
                root /wwwapp;  
              }
      agregar en archivo:
      /usr/local/etc/nginx/nginx.conf
        include "vdomains/*.conf";
   recargar servico
    service nginx reload

# Instalación en BD UbuntuServer (192.168.1.22)
  Creacion de usuario dev pass: dev grupo sudo 
  Configuracion SSH
  configuracion mysql
    sudo apt-get install mysql-server mysql-client
    sudo apt-get install php libapache2-mod-php php-mysql
    service mysql status
    GRANT ALL ON *.* TO 'dev'@'localhost' IDENTIFIED BY 'dev123' WITH GRANT OPTION;
    FLUSH PRIVILEGES;
    CREATE USER 'dev'@'*' IDENTIFIED BY '1234567890';
    GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'dev'@'localhost' WITH GRANT OPTION;
    FLUSH PRIVILEGES;
  
  
  
  
  
