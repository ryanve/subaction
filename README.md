# [subaction](../../)
#### starter WP child theme for use with the [action](https://github.com/ryanve/action) parent theme

## Resources

- [<b>actiontheme.com</b>/#usage](http://actiontheme.com/#usage)
- [ryanve](https://github.com/ryanve)/<b>[action</b>](https://github.com/ryanve/action)

## Hooks

Most customizations can be made via action or filter hooks. Use the [/subaction/functions.php](functions.php) file (or plugins) to add or remove actions or filters.

#### WP hook references

- [<b>Actions API</b>](http://codex.wordpress.org/Plugin_API#Actions)
- [<b>Filters API</b>](http://codex.wordpress.org/Plugin_API#Filters)
- [<b>Actions list</b>](http://codex.wordpress.org/Plugin_API/Action_Reference)
- [<b>Filters list</b>](http://codex.wordpress.org/Plugin_API/Filter_Reference)

## Templates

Developers can override parent theme (/action) files by creating a file of the same name in the child theme (/subaction) folder. 
For example, if you create `/subaction/branding.php`, it will override `/action/branding.php` file.
**Never edit files in the parent theme folder.** Override them from the child theme folder as described.
Copying files from `/action` to `/subaction` for editing there is fine.

#### Scripts and styles

The proper way to add scripts or styles in WordPress is via the queue system. See [functions.php](functions.php) for example. Avoid hardcoding `link[rel="stylesheet"]` or `script[src]` tags in templates.

- [wp_enqueue_style()](http://codex.wordpress.org/Function_Reference/wp_enqueue_style)
- [wp_enqueue_script()](http://codex.wordpress.org/Function_Reference/wp_enqueue_script)


## Releasing your theme

Feel free to rename `subaction` to a custom name. To do so, simply change the folder name and the theme name in [style.css](style.css). Happy theming =)

## Fund

Fund development with [tips to @ryanve](https://www.gittip.com/ryanve/) <b>=)</b>

## License

[MIT](http://en.wikipedia.org/wiki/MIT_License)