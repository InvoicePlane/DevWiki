# Contribution Guide

Every help is welcome, you don't have to be a professional PHP developer or SQL database engineer.
If you are not familiar with PHP or coding in general you could also help us in other ways.

### 1. Community links

[![Wiki](https://img.shields.io/badge/Help%3A-Official%20Wiki-429ae1.svg)](https://wiki.invoiceplane.com/)    
[![Community Forums](https://img.shields.io/badge/Help%3A-Community%20Forums-429ae1.svg)](https://community.invoiceplane.com/)    
[![Issue Tracker](https://img.shields.io/badge/Development%3A-Issue%20Tracker-429ae1.svg)](https://development.invoiceplane.com/)    
[![Roadmap](https://img.shields.io/badge/Development%3A-Roadmap-429ae1.svg)](https://go.invoiceplane.com/roadmapv1)     
[![Freenode](https://img.shields.io/badge/Chat%3A-Freenode%20(IRC)-green.svg)](https://go.invoiceplane.com/irc) 

### 2. Get familiar with our Development Guidelines
We are following some strict development guidelines while developing.

**PHP** - Coding standard is [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)

**JavaScript** - We use jQuery to make InvoicePlane functional.

**CSS** - We use [SASS](http://sass-lang.com/) to compile the CSS files.

#### Assets check

All assets (JavaScript, SCSS) files are checked for code conventions before they are compiled.

### Tools for development
We received some licenses for commercial development tools you can use if you want. Please contact use at mail@invoiceplane.com to get the license / access as we can't publish them here.

* [JetBrains PhpStorm](https://www.jetbrains.com/phpstorm/) (PHP IDE)
* [Balsamiq Mockups](http://balsamiq.com/products/mockups/)
* [Mailtrap.io](https://mailtrap.io/) (Email testing tool)

### 3. Contributing Code

<span class="text-danger">
<b><i class="fa fa-warning fa-margin-right"></i>Read this carefully to prevent your pull request to be closed!</b>
</span>

1. Before you submit any code to the repository please take a look at the [development tracker](https://development.invoiceplane.com) and search for your issue!
    * If an issue exists and someone is working on it, please contact this person.
    * If an issue exists and no one is working on it, assign it to yourself or write a comment.
2. Always reference the issue ID (e.g. IP-317) in all commits you make for this issue.
3. Before you create a pull request, rebase from the development branch.
    * Add the development branch as a remote: `git remote add ip git@github.com:InvoicePlane/InvoicePlane.git`
    * Do a rebase with the following command: `git pull --rebase ip development`
    Where `ip` is the name of the remote and `development` the branch.
    * Solve all conflicts and check if your code is still working.
4. Submit the pull request, reference the issue ID in the title and add a meaningful description.
