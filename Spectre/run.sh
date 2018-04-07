#!/bin/bash

# The secret is stored in secret.txt  The text in that file will be read to memory and then pulled from memory character-by-character using the Spectre speculative execution exploit (https://meltdownattack.com)

# convert multi-line secret.txt file to single line
tr '\n' ' ' < secret.txt

 # insert contents of secret.txt into C source
sed -e "s/TOPSECRET/$(<secret.txt sed -e 's/[\&/]/\\&/g' -e 's/$//' | tr -d '\n')/g" -i Source.c

# make and compile Spectre exploit Proof-of-Concept
make

# restore default C source
cp -f Source.bak Source.c

# run Spectre PoC to pull secret text from memory
./spectre.out

exit

