## bastion deploy Setting

```sh
git clone https://github.com/Jeongdaeho/bastion-deploy.git
```

## require
php, composer

## composer

```sh
curl -sS https://getcomposer.org/installer | php 
sudo mv composer.phar /usr/local/bin/composer
sudo ln -s /usr/local/bin/composer /usr/bin/composer
composer install
```

## 설정

# Iam 권한 생성
AmazonEC2ReadOnlyAccess  를 포함하는 계정생성, access key 생성

# credentials 등록
```sh
aws configure
```

# 실행
```sh
php ~/bastion-deploy/vendor/bin/envoy run deploy
```


## 주의할 점 
bastion 서버를 기준으로 처음 접속하는 ec2 instance의 경우 접속 할지 여부를 묻는데 답을 해야 개별 서버에 명령이 날아간다.