#!/bin/bash

# How to:
# Execute this comand from the toplevel directory of your Retromat repository,
# which is where index.php is currently located.

# Background:
# No cd ... or absolute paths here, because
# this command needs to work on local machines and on trvais-ci, too.

mkdir -p backend/app/Resources/views/home/generated/

php index.php en twig   > backend/app/Resources/views/home/generated/index_en.html.twig
php index.php de        > backend/app/Resources/views/home/generated/index_de.html.twig
php index.php es        > backend/app/Resources/views/home/generated/index_es.html.twig
php index.php fr        > backend/app/Resources/views/home/generated/index_fr.html.twig
php index.php nl        > backend/app/Resources/views/home/generated/index_nl.html.twig
php index.php ru        > backend/app/Resources/views/home/generated/index_ru.html.twig

php backend/bin/console cache:clear --env=prod
