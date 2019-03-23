# DoctrineAuditBundle demo application

This application demos what [damienharper/doctrine-audit-bundle](https://github.com/DamienHarper/DoctrineAuditBundle) can do.


Usage
=====

Before running the demo, you first need to install dev dependencies:

```bash
composer install
```

Then run the following commands to:
1. create the local database (SQLite)
2. populate it with demo data
3. clear the cache
4. start the local symfony web server

```bash
bin/console doctrine:database:drop --force
bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console doctrine:fixtures:load --append
bin/console cache:clear
bin/console server:run
```


Screenshots
===========

Audit inventory:

![Screenshot](https://github.com/DamienHarper/doctrine-audit-bundle-demo/screenshots/inventory.png)

Entity history:

![Screenshot](https://github.com/DamienHarper/doctrine-audit-bundle-demo/screenshots/entity_history.png)

Entity history:

![Screenshot](https://github.com/DamienHarper/doctrine-audit-bundle-demo/screenshots/entry_details.png)
