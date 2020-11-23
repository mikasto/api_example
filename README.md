# api_example
Shows creating JSON REST API by Yii2 Framework

Install
---
1. Use "git clone .." to copy project
2. Use "docker-compose up -d" inside project's main directory (you need to instal docker software)
3. Wait for building all containers and making entrypoint's command 

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
