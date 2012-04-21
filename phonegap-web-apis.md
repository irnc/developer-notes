# Common issues

Cordova JS script must be executed before adding listeners to online-offline
events because Cordova override document.addEventListener to handle this events.

## navigator.onLine

On Andoird 2.2 and 2.3 in WebView component [`navigator.connection.type` always returns `0`][webview-online-issue]
and `navigator.isOnline` is always `true` (online-offline event never triggered) (buildin browser works fine).

To workaround this issue use Cordova API.

[webview-online-issue]: http://code.google.com/p/android/issues/detail?id=16760

## navigator.app.loadUrl (Cordova API)

`params` are not used. See [`showWebPage` method][showWebPage-params] which is
eventually called by `loadUrl`.

[showWebPage-params]: https://github.com/apache/incubator-cordova-android/blob/master/framework/src/org/apache/cordova/DroidGap.java#L1001

## Web APIs issues in WebView component

http://simonmacdonald.blogspot.com/2012/02/android-issues-all-phonegap-developers.html