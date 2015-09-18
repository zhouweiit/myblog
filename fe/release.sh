#!/bin/bash
server_project_root=/Users/baidu/Zend/workspaces/php_workspace/myblog
rm -rf ./output
fisp release -cr ./home -d ./output
fisp release -cr ./common -d ./output
echo "delete server project files"
rm -rf $server_project_root/public/static
rm -rf $server_project_root/app/smarty/views/*
echo "cp fisp product files"
cp -R ./output/static $server_project_root/public/
cp -R ./output/template $server_project_root/app/smarty/views/
cp -R ./output/config $server_project_root/app/smarty/views/
cp -R ./output/plugin $server_project_root/app/smarty/views/
chown -R baidu $server_project_root/*
echo "done!"
