### Fix Site URL (GetSimple CMS plugin)

This simple plugin replaces all occurrences of a given string by the current Site URL (as defined in GS settings) in the content of pages, when editing or browsing them.

It can be used to migrate sites, so that you don't have to manually change every absolute URL (links, images...) you inserted in the old site.

Usage:

- unzip and upload *fixsiteurl.php* to your *plugins* folder and activate it in the Plugin Management page
- edit your site's *gsconfig.php* file and insert a line like this:    
`define('OLDSITEURL','http://localhost/oldsite/');`    

Notes:
- It doesn't convert every page you have in the site - it just changes the URLs when you edit or view a page.
That is, pages that haven't been edited and saved after the site change will still have the old URLs (internally). However they will be converted in the public site anyway (unless the plugin is removed or disabled) so users will not notice this.
- it will not work properly if old and new sites use different permalink structures.
- it will not work at all if the new site is in a subfolder of the old site (e.g. if you move from `www.example.com/` to `www.example.com/subfolder/`) 
