# Mailgun Mautic Plugin

### Requisitos

- Mautic v2.15 ou superior;
- PHP v7.0 ou superior.

### Instalação

```sh
$ cd plugins

$ git clone https://github.com/thalesamaria/AMMailgunBundle.git
```

Limpe o cache rodando os seguintes comandos na pasta raíz do seu Mautic:
```sh
$ php app/console cache:clear
```
```sh
$ php app/console cache:warmup
```
O comando abaixo reflete a maioria das instalações do Mautic no **Debian/Ubuntu utilizando Apache ou NGINX**:
```sh
$ chown -R www-data:www-data .
```
```sh
$ chmod -R g+rw .
```
```sh
php app/console mautic:assets:generate
```
```sh
php app/console mautic:plugins:reload
```

Acessea página de plugins pelo painel do Mautic e clique no botão **Instalar/Atualizar plugins**. 

## Como Usar

- Selecione o serviço de envio de emails 'Mailgun' em Configurações > Configurações de Email.
- Insira seu usuário e senha que pode encontrar na sua conta Mailgun
    + postmaster@mg.yourmailgundomain.com
- Salvar / Aplicar

### Webhook de Callback

Adicione a URL a seguir para todos os eventos a seguir no Mailgun:
- URL: `https://yourmautic.com/mailer/mailgun/callback`.
- Eventos:
    + complained
    + permanent_fail
    + temporary_fail
    + unsubscribed
