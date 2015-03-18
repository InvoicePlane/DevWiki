---
"title": "IP v2 Docs Index",
"tags": ["InvoicePlane", "development", "wiki"],
"author": "Kovah"
---

# InvoicePlane v2.x.x

* * *

## Setup your Development Environment

First, clone the repository to your local machine by using the following command:   
`git clone https://github.com/InvoicePlane/InvoicePlane-V2.git invoiceplane-folder/`

After that you have to install some tools needed to work with the InvoicePlane v2 development files:   
1. Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)   
2. Install [Node.js and NPM](https://docs.npmjs.com/getting-started/installing-node)   
3. Install [Bower](http://bower.io/)   
4. Then run the following commands:   
```
composer install
npm install
bower install
gulp
```

## Database Model

We use a pre-defined database model for InvoicePlane which can be viewed [here](https://my.vertabelo.com/public-model-view/FTM7kwegMsV99IGYK5h804p1wvrFzBEZFYvtAvCeOpLps1CsXLc4vRDyC4gpgR1C).  

* If you want to **add a new field** please leave a comment at the [Database Model Thread](https://community.invoiceplane.com/t/v2-database-scheme/94) and it will be added.
* If you want to **change a field** please leave a comment at the [Database Model Thread](https://community.invoiceplane.com/t/v2-database-scheme/94) so we can discuss this change as everyone has to be notified about this change.
