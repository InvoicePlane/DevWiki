---
"title": "v1 Application Structure",
"tags": ["InvoicePlane", "development", "wiki"],
"author": "Kovah"
---

# v1 Application Structure

The InvoicePlane application is not using the general way of working with Codeigniter like with models and views.   
We are working with modules (`/application/modules/*`) which offer the different functions like invoices, quotes, settings and so on. 

## Basic path handling

The routing of the application is done by the `/application/modules/layout` module.  

1. The module is loaded by InvoicePlane.
2. The module loads the main site layout from `/application/modules/views/layout.php`.
3. The module looks up the given path and loads the corresponding modules:
    * which paths are available is set in the controllers directory of the module
    * the corresponding controller loads the needed modules and views
    * the output of the module controller is sent to the layout module
4. The layout module returns the layout with the given output to the browser.

### Example: Invoice Overview

The user opens the following URL `http://invoicedomain.com/invoices/status/all` which is available in the main menu.

1. The application loads the `/application/modules/layout` module.
2. The layout module looks up the controller which is given by the path: `invoices/status/all`
    * is there a module that is named `invoices` based on the first part of the path
    * yes it is, the invoices module and the corresponding controller is loaded: (`/application/modules/invoices/controller/invoices.php`)
3. The invoices controller tries to load a function that is named like the given path `status`
    * there is a function `status($status = 'all', $page = 0)`. This function accepts up to two parameters which means two URL segment after `status` are handled by the status function too. 
    * the given URL segment `all` (after `status`) is passed to the status function
4. status() is loaded and `all` was passed to the function.
    * status() now loads all invoices based on the code and the given parameter
    * after that status() processes the database information and passes all information to a function called
    * now `$this->layout->buffer('content', 'invoices/index')` is called which opens the view `index.php` from the corresponding module folder and renders the view with the given content
5. The rendered view is passed back to the layout as `$content`
6. The layout view is rendered and passed to the browser

## Configuration

There are two different ways the configuration of InvoicePlane is working.

#### /application/config Directory

CodeIgniter loads all configuration files from the `/application/config` directory and configures IP based on the information that is stored in these files. The most important configuration file is `database.php` which is needed to connect ot the database.

#### Database Settings

On every request IP loads the content of the `ip_settings` database table which holds more variable configuration than from the configuration files.   
You can find more information about database settings on the [settings page](/v1/guides/settings.md).

## Assets

Assets are stored in the following paths:

**SASS**   
`/assets/default/sass`

**CSS**   
`/assets/default/css`

**JavaScript**   
`/assets/default/js`

**Fonts**   
`/assets/default/fonts`

**Images**   
`/assets/default/img`