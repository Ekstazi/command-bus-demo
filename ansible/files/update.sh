#!/usr/bin/env bash

cd /vagrant
echo 'Update code from git'
git pull
echo 'Update composer dependencies'
composer update
echo 'Apply migrations'
./yii migrate --interactive=0