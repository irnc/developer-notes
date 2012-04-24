After installing google-chrome-unstable package from Google's repository,
Google Chrome web browser is not listed in a dropdown for default application
selection in GNOME (System Settings / System Info / Default Applications).

To introduce Chrome's desktop entry file to GNOME use following command:

```bash
ln -s /opt/google/chrome/google-chrome.desktop /usr/share/applications/
```

# References

* https://wiki.archlinux.org/index.php/Default_Applications