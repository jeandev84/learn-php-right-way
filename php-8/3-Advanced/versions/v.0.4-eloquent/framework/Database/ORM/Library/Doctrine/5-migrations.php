<?php

# Generate Migration File :
# ./vendor/bin/doctrine-migrations generate

/*
 Generated new migration class to "/var/www/migrations/Version20231218032732.php"

 To run just this migration for testing purposes, you can use migrations:execute --up 'Migrations\Version20231218032732'

 To revert the migration you can use migrations:execute --down 'Migrations\Version20231218032732'
*/

# Migrate migrations files :
# ./vendor/bin/doctrine-migrations migrate


# ./vendor/bin/doctrine-migrations migrate first (work like rollback)
# ./vendor/bin/doctrine-migrations migrate prev
# ./vendor/bin/doctrine-migrations migrate next
# ./vendor/bin/doctrine-migrations migrate latest

# ./vendor/bin/doctrine-migrations rollback prev
# ./vendor/bin/doctrine-migrations rollback next
# ./vendor/bin/doctrine-migrations rollback latest


# ./vendor/bin/doctrine-migrations status

# ./vendor/bin/doctrine-migrations diff