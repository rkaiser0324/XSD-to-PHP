# xsd2php

With the present library you are able to compile PHP binding from XML Schema files,
and consequently, bind XML files to PHP models (unmarshalling), and save PHP bindings
as XML (marshalling).

## Requirements

The following PHP extensions must be installed:
1. [XSL](http://php.net/manual/en/book.xsl.php)
1. [SOAP](http://php.net/manual/en/book.soap.php)

## Notes

* The [Opcache](http://php.net/manual/en/book.opcache.php) PHP extension must be disabled for some methods to work; for example, `Bind->bindXML()` relies on [Reflection::getDocComment()](http://php.net/manual/en/reflectionclass.getdoccomment.php).
* SoapServerTest expects to resolve http://localhost:10088/api/xsd/ContactCompany.xsd and will fail if that endpoint is not live.

##  Version History

Releases after 0.0.6 are tracked in the repository.

* 0.0.6 Last release by Mike Bevz
  * Fixed #24: Fix problem with WSDL generation - soap:operation must not have any child
* 0.0.5 Major refactoring
  * Fixed #17: Array of objects is not converted to XML correctly
  * Implemented #12: Feature: WSDL generator utilizing existing mapping in classes
  * Added NullLogger - mock for logger. It will be used later for #18: Feature: Logger injection
  * #13 Command line tool: Initial version developed, compile-schema target only.
  * #8 Create facade class: Initial version implemented, only compileSchema method works. (See LegkoXml.php)
* 0.0.4 Issue #12. WSDL autodiscovery
  * Fixed #10: Directory structure do not correspond to PHP namespaces
  * Fixed #5: Add debug output option to XSD2PHP
  * Fixed #9: Generated WSDL tested with Zend_Soap
  * WSDL tested with Apache CXF
* 0.0.3 XML generation refactored
  * namespaces generated as ns0 ... nsX
  * Fixed #4: added @var to PHP models with full class name (with namespace)
* 0.0.2 XSD Imports and includes routines rewritten
  * Refactored XSD import and include tags processing
  * Fixed problem with numeric namespaces in generated PHP models
  * Added new test cases: Multi level include and import processing, custom schema based on UBL2.0
* 0.0.1 Initial release
  * Compile XSD to PHP
  * Marshal/unmarshal XML


## Links

* Discussion Group http://groups.google.com/group/legkoxml-support
