@servers(['production'=> 'food@175.107.59.20 '])


@task('deploy',['on' => 'production'])
git pull origin main
@endtask

@task('show-files',['on' => 'production'])
cd /var/www/html
pwd
@endtask
