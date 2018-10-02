composer install
(удалить папку вендор если не завелось)

php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations
(и зарегистрировать юзера с ником admin, подтверждение по email включено пока - тут команда если не поднялось из дампа база)

