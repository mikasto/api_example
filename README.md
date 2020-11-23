# api_example
Shows creating JSON REST API by Yii2 Framework

Install
---
1. Use "git clone .." to copy project
2. Use "docker-compose up -d" inside project's main directory (you need to instal docker software)
3. Check ready can see page http://localhost:20080/ not fail with required "./vendor/autoload.php". Need to wait for composer loading all vendors.

Users
---
Use link http://localhost:20080/user to view all users. You need authorisation by test:test.
Need copy auth_key & id for using API next steps.

Test #1:
---
<pre>
curl --location --request GET 'http://localhost:20080/v1/user/{id}' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer {auth_key}'
</pre>
