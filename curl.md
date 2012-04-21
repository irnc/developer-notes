== CURL ==

Written by Daniel Stenberg.

Hosted on GitHub: https://github.com/bagder/curl

== CURL SSL/TLS error ==

See curl-tls-test.php. When transport option is not specified directly, default
will be used ([CURL_SSLVERSION_DEFAULT][default-ssl-version]) which will set
both sslv3 & tlsv1. Either options separately work, but together produce
constantly reproducible error.

=== Reproduce in command-line curl ===

curl -v https://graph.facebook.com/me
-- Hang out at "SSLv3, TLS handshake, Client hello (1):"

curl --sslv3 -v https://graph.facebook.com/me
curl --tlsv1 -v https://graph.facebook.com/me
-- Works

curl --sslv2 -v https://graph.facebook.com/me
-- curl: (4) OpenSSL was built without SSLv2 support

== Terminology ==

* http://curl.haxx.se/
* http://en.wikipedia.org/wiki/Transport_Layer_Security
* http://openssl.org/
* http://www.php.net/manual/en/function.curl-setopt.php

== Possible Related Bugs ==

* http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=623198
* http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=658276
* http://aruljohn.com/info/sslversion/
* http://developers.facebook.com/bugs/213367445404472/?browse=search_4eeccca164bbe6357503363
* http://drupal.org/node/1506312
* http://stackoverflow.com/questions/6307322/ssl-connection-timeout-in-facebook-fql/9915635#9915635
* http://stackoverflow.com/questions/8389293/ssl-timeouts-and-unknown-ssl-protocol-errors
* http://stackoverflow.com/questions/9796815/why-do-facebook-api-calls-reset-the-connection-only-in-my-development-environmen
* https://trac.macports.org/ticket/33715
* https://bbs.archlinux.org/viewtopic.php?id=138103&p=2
* http://curl.haxx.se/mail/lib-2011-01/0050.html

[default-ssl-version]: https://github.com/bagder/curl/blob/master/lib/nss.c#L1242