@servers(['localhost' => '127.0.0.1', 'www' => ['serverpilot@104.236.117.4']])

@story('deploy')
    build
    deployment
@endstory

@task('build', ['on' => 'localhost'])
    npm run prod
    git add .
    git commit -m 'Ran npm run prod'
    git push
@endtask

@task('deployment', ['on' => 'www'])
    cd ~/apps/philip-theobald
    php artisan down --message="Deploying New Code"
    git pull origin master
    composer install --optimize-autoloader --no-dev
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
    {{-- npm install --production --}}
    npm ci
    {{-- php artisan migrate --force --}}
    php artisan up
@endtask
