#!/usr/bin/env bash

#use
#mvn install
#to run tests

#run stuff with sudo, otherwise it fails to bind to port bc lack of permissions

sudo mvn install
sudo nohup mvn exec:java -Dexec.mainClass="org.vanautrui.website.App" &
