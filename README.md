# Speedtest_PHP_MySql

Speedtest in Php and MySql
Despues de descargar los archivos

1) Instalar speedtest-cli
  Debian/Ubuntu
    sudo apt-get update
    sudo apt-get install speedtest

  Fedora/Centos
    sudo yum install wget
    wget https://bintray.com/ookla/rhel/rpm -O bintray-ookla-rhel.repo
    sudo mv bintray-ookla-rhel.repo /etc/yum.repos.d/
    sudo yum install speedtest

  masOS
    brew tap teamookla/speedtest
    brew update
    brew install speedtest --force

  info www.speedtest.net/es/apps/cli

2) Crear una db en Mysql y Crear la tabla speedtest

  CREATE TABLE `speedtest` (
    `id` INT ( 11 ) NOT NULL AUTO_INCREMENT,
    `ip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
    `hostname` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
    `date_test` datetime NOT NULL,
    `ping` FLOAT NOT NULL DEFAULT '0',
    `download` FLOAT NOT NULL DEFAULT '0',
    `upload` FLOAT NOT NULL DEFAULT '0',
    PRIMARY KEY ( `id` ),
  KEY `date_test` ( `date_test` ) 
  ) ENGINE = INNODB AUTO_INCREMENT = 0 DEFAULT CHARSET = utf8 COLLATE = utf8_spanish2_ci;
  
3) Crear una tarea en cron 
  #crontab -e
  Agregar la linea
   */30   *       *       *       *       sudo /home/usuario/speedtest.sh
 4) Crear speedtest.sh
    #nano speedtest.sh
   Insertar path a speedtest.php
    sudo php /home/usuario/SpeedtestPhp/speedtest.php
   
  
  

