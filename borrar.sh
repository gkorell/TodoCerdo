#!/bin/sh
clear
echo "** Borrado recursivo de carpetas .svn **"
rm -rf `find . -type f -name .gitignore`
echo " --> Todo OK"
