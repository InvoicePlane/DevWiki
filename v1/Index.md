---
"title": "IP v1 Docs Index",
"tags": ["InvoicePlane", "development", "wiki"],
"author": "Kovah"
---

# InvoicePlane v1.x.x

* * *

## General

InvoicePlane v1.x.x uses the following frameworks / libraries:

**Main Framework**   
Codeigniter 2 ([Website](http://www.codeigniter.com/) | [Documentation](http://www.codeigniter.com/user_guide/))

**UI Framework**   
Bootstrap 3 ([Website](http://getbootstrap.com) | [Documentation](http://getbootstrap.com/getting-started/))   
jQuery 1.11.x ([Website](https://jquery.com) | [Documentation](http://api.jquery.com))  

**Fonts / Icons**   
Font Awesome ([Website](http://fortawesome.github.io/Font-Awesome/) | [Documentation](http://fortawesome.github.io/Font-Awesome/icons/))

**JavaScript Libraries**   
jQuery UI ([Website](https://jqueryui.com) | [Documentation](http://api.jqueryui.com))   
Bootstrap Datepicker ([Website](https://github.com/eternicode/bootstrap-datepicker/) | [Documentation](http://bootstrap-datepicker.readthedocs.org/en/latest/))   
Bootstrap Typeahead ([Website / Documentation](https://twitter.github.io/typeahead.js/examples/))   
SCEditor (WYSIWYG) ([Website / Documentation](http://www.sceditor.com))   
Select2 v3 ([Website / Documentation](https://select2.github.io))   

**Browser Compatibility**   
Modernizr 2 ([Website / Documentation](http://modernizr.com))   

### Setup your Development Environment

It's pretty easy to configure InvoicePlane for development. Just follow the next steps to start.   

1. Create the following directory: `/application/config/development`   
You are now able to override all configuration variables without changing any source files.   
2. Copy the file `/application/config/config.php` into the new development folder and set `log_threshold` to 2.
3. Copy the file `/application/config/database.php` into the new development folder and insert the database credentials for the database you want to use for development.
4. Ready!