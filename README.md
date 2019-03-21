Running demo application
========================

Before running the demo, you first need to install dev dependencies:

```bash
composer install --dev

bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console doctrine:fixtures:load --append
bin/console cache:clear
bin/console server:run
```
