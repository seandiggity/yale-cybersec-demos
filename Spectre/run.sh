#!/bin/bash

# Shell script by Sean O'Brien sean@webio.me | sean.obrien@yale.edu to tweak Spectre Proof-of-Concept for live demonstrations.
#
# The secret is stored in a file (secret.txt by default).
# The text in that file will be read into memory and then pulled from memory character-by-character using the Spectre speculative execution exploit (https://meltdownattack.com)
#
# Optionally, the PHP form index.php will save to the secret file, which allows for classroom/audience participation.

# secret file
_file="secret.txt"

# check if the file exists, if not then create it
if [ -s $_file ] 
then
    # set file permissions to read/write for all
    chmod a+rw $_file

    # convert multi-line file to single line
    tr '\n' ' ' < $_file
else
    # create file with default secret text
    echo "YOUR-SECRET-GOES-HERE" > $_file

    # set file permissions to read/write for all
    chmod a+rw $_file
fi

# insert contents of file into C source
sed -e "s/TOPSECRET/$(<$_file sed -e 's/[\&/]/\\&/g' -e 's/$//' | tr -d '\n')/g" -i Source.c

# make and compile Spectre exploit Proof-of-Concept
make

# restore default C source
cp -f Source.bak Source.c

# run Spectre PoC to pull secret text from memory
./spectre.out

exit

