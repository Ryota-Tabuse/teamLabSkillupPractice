# チームラボ オンラインスキルアップSTEP1

## 概要

## 工夫した点

## 起動・停止

起動
```
$ docker-compose up -d
```

停止
```
$ docker-compose down
```

## URL

index.php  
http://localhost:9000

pgadmin  
http://localhost:5050


## ディレクトリ構成
* phpなコンテンツは./appに配置となります
* nginxの設定は./nginx/site.conf

```
.
├── app
│   └── index.php
├── nginx
│   └── site.conf
├── pgadmin
├── pgsql
│   └── data
│       └── .gitkeep
├── docker-compose.yml
├── .gitignore
└── README.md
```
