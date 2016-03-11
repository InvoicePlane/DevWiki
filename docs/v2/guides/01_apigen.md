# Generate Class and Functions Docs

InvoicePlane is a very complex application. Because of that InvoicePlane ships with a built-in documentation generation that lists all available classes and functions with their descriptions.

## Generate the documentation

To generate the documentation you have to run the following command in your terminal in the root directory of the InvoicePlane app:

```bash
./vendor/bin/apigen generate --config=.apigen.yaml
```

The terminal should output somethinmg like this:

```bash
$ ./vendor/bin/apigen generate --config=.apigen.yaml
Scanning sources and parsing
Found 101 classes, 0 constants and 39 functions
Generating API documentation
100 % - Finished!
```

After that you can access the documentation from `docs/index.html`.