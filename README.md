# api_example
Shows creating JSON REST API by Yii2 Framework

Install
---
1. Use "docker-compose up -d --build && docker-compose exec backend composer install && docker-compose exec backend /usr/local/bin/php yii migrate --interactive 0" inside project's main directory (you need to instal docker software)

Users
---
Use link http://localhost:21080/user to view all users. You need authorisation by test:test.
Need copy auth_key & id for using API next steps.

Test #1:
---
<pre>
curl --location --request GET 'http://localhost:20080/v1/user/{id}' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer {auth_key}'
</pre>
