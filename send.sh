#!/bin/bash
serverHost=$(cat config.json | jq -r '.config.server')
serverPort=$(cat config.json | jq -r '.config.port')
callsign=$(cat config.json | jq -r '.config.call')
password=$(cat config.json | jq -r '.config.pass')
lat=$(cat config.json | jq -r '.config.lat')
long=$(cat config.json | jq -r '.config.long')

partner=$(cat messages.json | jq -r '.msg.partner')
messages=$(cat messages.json | jq -r '.msg.messages')

address="${callsign}>APRS,TCPIP::${partner} :${messages}"
login="user $callsign pass $password vers ShellBeacon 1.0"

#construction packet
packet="${address}${position}${comment}"

#send data to IG server
nc -C $serverHost $serverPort -q 10 <<-END
$login
$packet
END
if [ "$1" = "1" ]
then
    exit
fi
