
== Advanced Custom Fields - Hidden Field Type ==
This plugin adds a new field type to Advanced Custom Fields (ACF) that allows you to create hidden input fields in your custom post types, pages or options pages. The field type is based on the existing ACF Text field, but it hides the input field and the label.

== Installation ==
1. Install and activate the Advanced Custom Fields plugin, version 5 or higher.
2. Download the ZIP file of this plugin from Codecanyon or from the plugin repository on GitHub.
3. Upload the ZIP file to your WordPress site (Plugins > Add New > Upload Plugin).
4. Activate the plugin.

== Usage ==
1. Once the plugin is activated, you can create a new ACF field group and add a new field of type "Hidden". By default, the field will be hidden in the WordPress backend and on the frontend.
2. To customize the value of the hidden field, you can use ACF's default value, which can be set to a fixed value or to a dynamic value using ACF's template functions, such as get_field(), get_sub_field(), get_field_object(), etc.
3. Note that if you use ACF's get_field() function to retrieve the value of the hidden field, you need to pass the third parameter as false to prevent the function from applying any filters or formatting to the value, since the hidden field is not meant to be displayed.

== Changelog ==
1.0.0
Initial release.

== Credits ==
This plugin was developed by Shahzaib Khan.

== License ==
This plugin is released under the GNU General Public License version 2 or later.
