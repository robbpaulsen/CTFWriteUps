### Bandit Over the Wire

#### En el nivel 12 la meta es encontrar el password que esta dentro de un archivo llamado "data.txt" que a sido comprimido repetidas veces. Al estar intentando varios metodos para decifrar el nivel tome unos minutos para descanzar y por alguna razon hice un ecaneo de bajos privilegios con NMAP y lanzo este reporte:

ndit12@bandit:~$ nmap -sV -A 10.0.1.46
Starting Nmap 7.80 ( https://nmap.org ) at 2022-12-03 22:19 UTC
Nmap scan report for bandit (10.0.1.46)
Host is up (0.00016s latency).
Not shown: 998 closed ports
PORT      STATE SERVICE VERSION
22/tcp    open  ssh     OpenSSH 8.9p1 (protocol 2.0)
30000/tcp open  ndmps?
| fingerprint-strings:
|   FourOhFourRequest, GenericLines, GetRequest, HTTPOptions, Help, Kerberos, LDAPSearchReq, LPDString, RTSPRequest, SIPOptions, SSLSessionReq, TLSSessionReq, TerminalServerCookie:
|_    Wrong! Please enter the correct current password
1 service unrecognized despite returning data. If you know the service/version, please submit the following fingerprint at https://nmap.org/cgi-bin/submit.cgi?new-service :
SF-Port30000-TCP:V=7.80%I=7%D=12/3%Time=638BCB7A%P=x86_64-pc-linux-gnu%r(G
SF:enericLines,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x20current\
SF:x20password\n")%r(GetRequest,31,"Wrong!\x20Please\x20enter\x20the\x20co
SF:rrect\x20current\x20password\n")%r(HTTPOptions,31,"Wrong!\x20Please\x20
SF:enter\x20the\x20correct\x20current\x20password\n")%r(RTSPRequest,31,"Wr
SF:ong!\x20Please\x20enter\x20the\x20correct\x20current\x20password\n")%r(
SF:Help,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x20current\x20pass
SF:word\n")%r(SSLSessionReq,31,"Wrong!\x20Please\x20enter\x20the\x20correc
SF:t\x20current\x20password\n")%r(TerminalServerCookie,31,"Wrong!\x20Pleas
SF:e\x20enter\x20the\x20correct\x20current\x20password\n")%r(TLSSessionReq
SF:,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x20current\x20password
SF:\n")%r(Kerberos,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x20curr
SF:ent\x20password\n")%r(FourOhFourRequest,31,"Wrong!\x20Please\x20enter\x
SF:20the\x20correct\x20current\x20password\n")%r(LPDString,31,"Wrong!\x20P
SF:lease\x20enter\x20the\x20correct\x20current\x20password\n")%r(LDAPSearc
SF:hReq,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x20current\x20pass
SF:word\n")%r(SIPOptions,31,"Wrong!\x20Please\x20enter\x20the\x20correct\x
SF:20current\x20password\n");

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 94.52 seconds
