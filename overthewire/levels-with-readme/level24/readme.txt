#!/bin/bash

bandit=VAfGXJ1PBSsPSnvsjI8p759leLZ9GGar
for pin in {0000..9999}; do
    echo "$bandit $pin"
done | nc localhost 30002 | grep -v "Wrong"
