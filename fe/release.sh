#!/bin/bash
server_project_root=/home/zhouwei/workspace/myblog
rm -rf ./output
fisp release -cr ./frontend -d ./output
fisp release -cr ./backend -d ./output
fisp release -cr ./common -d ./output
echo "delete server project files"
rm -rf $server_project_root/public/static
rm -rf $server_project_root/app/smarty/views/*
echo "cp fisp product files"
cp -R ./output/static $server_project_root/public/
cp -R ./output/template $server_project_root/app/smarty/views/
cp -R ./output/config $server_project_root/app/smarty/views/
cp -R ./output/plugin $server_project_root/app/smarty/views/
chown -R www-data $server_project_root/*
echo "done!"
