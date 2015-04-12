# WordPress Hook Examples

**Do not activate on a live site!**

It's ~~2014~~ 215 and somehow, somewhere something is preventing your site from displaying. You've identified the offending code as none other than a function calling the dreaded `hookex_die()`. You can't deactivate the plugin and can't hack its code lest your fix be wiped out in a future plugin update. The only feasible option to save your site is to wield the [Plugin Hook API](http://codex.wordpress.org/Plugin_API/Hooks)...

Cheesiness aside, this plugin can be used as an educational exercise or reference for removing actions that have been attached using various common patterns in WordPress plugins.

The basic syntax for adding and removing hooks in procedural programming is widely understood, but when introducing classes or object-oriented principles, the implementation details can be a little unclear for beginners and even intermediate developers. This plugin demonstrates how to use the array syntax with class methods and when to use a class name or reference to an object instance to add or remove actions and filters.

If you get stuck, the `remove-hooks.php` file contains the code for removing all the offending hooks. Note that some example files may attach more than one action that needs to be removed.
