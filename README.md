# Mailgun Mautic Plugin

### Requisitos

- Mautic v2.15 ou superior;
- PHP v7.0 ou superior.

### Instalação

```sh
$ cd plugins

$ git clone https://github.com/moskoweb/AMNameSanitizerBundle.git
```

Limpe o cache rodando o seguinte comando na pasta raíz do seu Mautic:

```sh
$ php app/console cache:clear && chmod -R g+rw * && php app/console mautic:assets:generate && php app/console mautic:plugins:reload
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
