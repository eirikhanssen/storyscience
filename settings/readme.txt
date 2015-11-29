settings.php contains user configurable settings

Here you can change:
the default interface language
the default theme

note: all paths here are relative to the storyscience root folder

How to add new theme:
cp -R style/default style/newname

edit or add css+image files in style/newname
make the new style default by editing settings.php

How to add new interface language, f.eks adding a de locale:
mkdir -p locale/de
cp -R locale/en/interface locale/de/interface

- change lang to de in locale/de/interface/locale.xml
- translate all the key elements in locale/de/interface/locale.xml to german

make german language default language by editing settings.php and set:
$default_language = "de";

How to add new content language:

Example: To add a new german translation for the content
mkdir -p locale/de # create locale/de folder if it doesn't exist
cp -R locale/en/content locale/de/content # copy english locale to german

edit locale/de/content/locale.xml
change lang attribute to de
translate contents of all key elements to german.

