# PHP中級者プログラミング

## MacでのDockerのインストール

```sh
# HomeBrewのインストール(入ってない人だけ。紙面の都合で改行していますが、実際は1行です)
/usr/bin/ruby -e \
  "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"

# Docker for Macのインストール(入ってない人だけ)
brew cask install docker
```

筆者の開発環境の都合上、Macでの利用方法を解説しています。Windowsでも、同様にDockerが必要です。

## サンプル用のWebサーバー(Apache+PHP)を起動する

起動は、docker-composeより行ないます。

```sh
# Gitクライアント(Sourcetree, GitKraken..)より、サンプルリポジトリをcloneします。
git clone https://github.com/konosumi/techbook-02-php-sample

# dockerは、サンプルリポジトリのdockerディレクトリにあります。
cd techbook-02-php-sample/docker

# docker-composeで起動します。「-d」を付けると、バックグラウンド実行になります。
docker-compose up -d
```

## ブラウザからWebサーバーの動作確認を行なう

Apache用のポートには、8080番を使用しています。ローカルホストで起動していますので、phpinfoが表示されることを確認してください。

## Webサーバーを終了する

Webサーバーの終了は「docker-compose stop」です。

```sh
cd techbook-02-php-sample/docker
docker-compose stop
```

## Webサーバーの中に入る

Webサーバーの中に入るには「docker exec」です。

```sh
docker exec -it docker_apache-php-7.2.9_1 /bin/bash

# Webサーバーの中から抜ける場合は、普通にexitします。
exit
```

本書はDockerの解説書ではないため、細かい解説は割愛させていただきます。
