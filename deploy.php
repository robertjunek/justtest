<?php

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/robertjunek/justtest.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('192.168.1.205')
    ->set('port', 2124)
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/deployer/a');

// Hooks

after('deploy:failed', 'deploy:unlock');
