# WP-Admin Allow X Frame Options

### How to install

In the plugin installation page, click in `Add Plugins` -> `Upload Plugin` select zip file and upload.

> Inportant: You need to define a valid URL domain in the [$origin]( https://github.com/johnidm/WP-Admin-Allow-X-Frame-Options/blob/master/wp-admin-allow-x-frame-options.php#L20) variable.

#### Example of use

With the plugin installed try calling the WP admin page in a **iframe** as follows:

```
<!DOCTYPE html>
<html>
<head>
    <title>WP Admin Allow X-Frame-Options</title>
</head>

<body>
    <iframe src="http://your-wp-site/wp-admin" 
    	style="overflow: hidden; height: 100%; width: 100%; position: absolute;" 
    	height="100%" 
    	width="100%">
    </iframe>
</body>
</html>
```

#### References

- https://developer.wordpress.org/reference/functions/send_frame_options_header/
- https://github.com/1000camels/wp_allow-from-x-frame-options/tree/97a0822fe0fb393159050beb5353a09680880ee8
- http://wpninjas.com/how-to-create-a-simple-wordpress-plugin/
- http://www.hongkiat.com/blog/beginners-guide-to-wordpress-plugin-development/
- https://www.competethemes.com/blog/submit-wordpress-plugin/
