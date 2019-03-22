# DoctrineAuditBundle demo application

This application demos what [damienharper/doctrine-audit-bundle](https://github.com/DamienHarper/DoctrineAuditBundle) can do.


Usage
=====

Before running the demo, you first need to install dev dependencies:

```bash
composer install

bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console doctrine:fixtures:load
bin/console cache:clear
bin/console server:run
```
