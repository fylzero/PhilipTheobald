@servers(['localhost' => '127.0.0.1', 'www' => ['serverpilot@104.236.117.4']])

@task('deploy', ['on' => 'www'])
    cd ~/apps/philip-theobald
    php artisan down --message="Deploying New Code"
    git pull origin master
    composer install --optimize-autoloader --no-dev
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
    npm ci
    npm run production
    {{-- php artisan migrate --force --}}
    php artisan up
@endtask
