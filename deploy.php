<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'website');
set('repository', 'https://github.com/sukycms/website.git');
set('git_tty', true);
set('ssh_multiplexing', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);

// Hosts
host('sukycms.com')
    ->user('')
    ->set('deploy_path', '~/{{application}}');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');

