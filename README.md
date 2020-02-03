Proof of Concept of large file upload, based on `ankitpokhrel/tus-php` and Uppy / tus-js-client implementation of tus protocol.

Tested on Apache server with `AllowOverride All` and rewrite module enabled.

For nginx apply rewrite rule described on https://github.com/ankitpokhrel/tus-php#nginx

Tweak endpoint path in static/index.html as needed