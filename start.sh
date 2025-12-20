#!/bin/bash
# تشغيل Apache مع PHP
a2dismod mpm_event mpm_worker
a2enmod mpm_prefork rewrite

# إذا كان هناك vendor، تحديث autoload
if [ -f "composer.json" ]; then
    composer dump-autoload --optimize
fi

# إنشاء key إذا لم يكن موجوداً
if [ -z "$(grep 'APP_KEY=' .env 2>/dev/null)" ]; then
    php artisan key:generate
fi

# تشغيل Apache
exec apache2-foreground