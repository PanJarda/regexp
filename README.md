# regexp
Static class for easier handling regular expressions in PHP.

# Usage
Regular expression for matching US postal address:

```php
$postal_address = '/[a-zA-Z\d\s\-\,\#\.\+]+/';
```

can be written as follows:

```php
$postal_address = r::exp(
                     r::one_of(
                        r::a_z .
                        r::A_Z .
                        r::digit .
                        r::space .
                        r::string('-,#.+')
                     ) .
                     r::n_times
                  );
```