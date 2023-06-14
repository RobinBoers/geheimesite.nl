---
title: "Project: CMD"
translationKey: project-cmd
---

Dit een programma dat ernorm veel lijkt op windows CMD. Ik heb het gemaakt omdat ik het leuk vond.  
Je kan er wat simpele commando's in uitvoeren, en er is een chatrobot.

UPDATE: De nieuwe versie heeft de optie om van OS te veranderen, JS is nu ingeschakeld, en er zitten nog een paar andere leuke easter eggs in!

{{< warning >}}
Dit is een oud project wat erg buggy is, en niet meer wordt geüpdate.
{{< / warning >}}

## Commando's

| Command          | Functie                                                                  |
| ---------------- | ------------------------------------------------------------------------ |
| login            | login to get access to root commands                                     |
| web              | type a url navigate to that website                                      |
| web.search       | search the web witth GOOGLE                                              |
| cancel           | if websearch by URL or websearch by GOOGLE is on, it turns websearch off |
| clear            | clear the console, and save data                                         |
| reset, new       | clear the console, and delete data                                       |
| logout, relog    | logout                                                                   |
| exit             | close the terminal, and delete all data                                  |
| debug            | show debug info                                                          |
| cd               | navigate to a directory                                                  |
| dir, ls          | show the files in the directory                                          |
| os.linux, os.win | change OS                                                                |
| os.motd          | show the motd of the selected OS                                         |
| js               | start Javascript input                                                   |
| js.stop          | stop Javascript input                                                    |
| js.delete        | delete Javascript input                                                  |
| js.run           | run Javascript input                                                     |

<span hidden>Post information</span> {{< demo-icon url="/projects/commandpromt2" >}}

{{< figure src="assets/images/projects/cmd.png" alt="Screenshot" >}}
