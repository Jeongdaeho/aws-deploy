## bastion deploy Setting

```sh
git clone git@github.com:Jeongdaeho/bastion-deploy.git
```

## composer

```sh
composer install
```

## 설정

mv .aws ~/.aws
chmod -R 600 ~/.aws

# Iam 권한 생성
AWSNetworkManagerReadOnlyAccess 를 포함하는 계정생성, access key 생성

# credentials 수정 
vim ~/.aws/credentials
