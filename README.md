idonethis-alfred
================

Allows users of Alfred 2 to post their Dones directly to IDoneThis.com via their favorite tool, Alfred.

There is currently not an API to talk to IDoneThis.com, however an email interface does exist. To utilize this extension you will currently need to setup a PHP file on a webserver that will act as an email proxy. 

== Setup ==
=== Server ===
* Copy the server/idid.php file to your PHP capable webserver
* Edit idid.php and supply your own SERVER SECRET KEY

=== Alfred ===
* Double click to install the extension
* Edit the script in the newly created workflow. The following values need to be set


* from_name - Your display name
* from_addr - Email address used for IDoneThis.com
* to_addr - Email address of the team account. You will need to use the team slug. You can get the slug from the team url
* secret - The SERVER SECRET KEY setup in the previous step

The last thing to get setup is the URL to the idid.php file hosted on your server. Be sure to update `$url` to reflect the address!

Start using the `idid` keyword in Alfred to quickly and easily send your Dones to IDidThis.com!
