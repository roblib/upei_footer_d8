# UPEI footer block for Drupal 8 VRE's

UPEI footer exposes a block that includes the footer from a static URL. This module 
allows the footer to live independant of a theme so it can be exposed on multiple
site installs and themes. Currently there are no admin options but it does pull in a css file for responsivity and some basic styles.

Maintained by Rob Drew.

Install
-------

1) Copy the upei_footer folder to the modules folder in your installation.

2) Enable the module in the 'Modules' section from the admin bar
   (/admin/modules).

3) Go to the blocks page at Structure -> Blocks (admin/structure/block) and set the UPEI Footer block
   to the footer region.  
