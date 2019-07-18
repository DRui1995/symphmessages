

# Edit the env file and add DB params

# To Create Article schema
php bin/console doctrine:migrations:diff
# To Run migrations
php bin/console doctrine:migrations:migrate

