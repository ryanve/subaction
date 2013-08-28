<?php 

# @link actiontheme.com
# @link codex.wordpress.org/Child_Themes

# Most customizations can be made via action/filter hooks. 
# Use this file to add or remove actions/filters. It is also 
# possible to override parent theme files by copying them into 
# this folder and editing them here. For example, if you put a
# file here called branding.php, it will override the parent 
# theme's branding.php file.

# @link codex.wordpress.org/Plugin_API#Actions
# @link codex.wordpress.org/Plugin_API#Filters
# @link codex.wordpress.org/Plugin_API/Action_Reference

# Apply customizations inside a "theme setup" function:
is_admin() or add_action('after_setup_theme', function() {
    
    # Key Functions
    # @link codex.wordpress.org/Function_Reference/add_action
    # @link codex.wordpress.org/Function_Reference/add_filter
    # @link codex.wordpress.org/Function_Reference/wp_enqueue_style
    # @link codex.wordpress.org/Function_Reference/wp_enqueue_script
    
    # Starter Actions

    # CSS
    # handle, uri, deps, ver, media
    add_action('init', function() {

        # To simply defer to the parent CSS, use:
        // wp_enqueue_style('parent-style');
        
        # Otherwise - custom styles - use: 
        # Include dependencies like 'parent-base' or 'parent-style' as needed.
        $dependencies = array('parent-base');
        wp_enqueue_style('child-style', get_stylesheet_uri(), $dependencies, null, 'screen,projection');

    }, 20); # << wait until parent theme styles are registered
    
    # JavaScript
    # handle, uri, deps, ver, in_footer
    add_action('init', function() {

        # Start with Modernizr if applicable. Uncomment and change URI as needed:
        // $uri = 'http://airve.github.com/js/modernizr/modernizr_shiv.min.js';
        // wp_enqueue_script('modernizr', $uri, array(), null, false);
        
        # jQuery plugin example. List jQuery as a dependency and load in footer:
        // $uri = trailingslashit(get_stylesheet_directory_uri()) . 'js/example-plugin.js';
        // wp_enqueue_script('example-plugin', $uri, array('jquery'), null, true);
        
    }, 1); # << prioritize early to ensure position in queue

});

#end (omit PHP end tag to prevent "white screen" errors)