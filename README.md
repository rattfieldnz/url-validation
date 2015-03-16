# url-validation
This is a Laravel composer package for validating URL's.

Validation for this package will include:

* Validating for correct syntax, specified by internal regex libraries
* Validating whether a given url exists or not
* Checking if a given url exists on spam-related databases

--------------------------------------------------------------------------------------------------------------------------------

## Development Calendar:

* [16 March 2015](#16032015)

### <a name="16032015">16 March 2015</a>
This is the very first day of development - not even considered a beta release yet.

Initial development today included: 

* Setting up classes to handle regex libraries (specifically for url syntax validation)
* Setting up the initial base class for validation
* Creating a Helpers class to manage miscellaneous functionality
* Creating a class to hold adapted regex libraries (which will be sourced)
