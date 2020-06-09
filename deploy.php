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
add('shared_dirs', [
    'public/uploads',
]);

// Writable dirs by web server
add('writable_dirs', [
    'public/uploads',
]);

// Hosts
host('sukycms.com')
    ->user('suky')
    ->set('deploy_path', '~/{{application}}');

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'artisan:migrate');
after('deploy:update_code', 'sukycms:assets:publish');

task('sukycms:assets:publish', function () {
    runLocally('yarn run prod');

    upload('public/build', '{{release_path}}/public');
    upload('public/mix-manifest.json', '{{release_path}}/public');
});

task('artisan:optimize', function () {

});

task('artisan:route:cache', function () {

});
