## Frontend
Use Bootstrap as the CSS Framework.
Via XHR, do a request to a PHP backend and display order information using Javascript (jQuery, AngularJs, React, Vue, … can be used)
1. Ewallet
2. Transaction info
3. Payment Details
4. Customer info
5. Shopping cart

## Backend
OOP PHP custom code or using a framework like FuelPHP, Laravel.
Do a request to XML Api and parse the order information.

To display the shopping cart please use:
  <shopping-cart>
    <items>

* Please, ignore the one with html:
  <transaction>
    <items>

## Example request below: 
  XML Api Request (NOTE: Replace {TRANSACTION ID} with a valid transaction id.)
  POST - https://testapi.multisafepay.com/ewx/
  <?xml version="1.0" encoding="UTF-8"?>
  <status ua="custom-1.1">
   <merchant>
   <account>1001001</account>
   <site_id>13431</site_id>
   <site_secure_code>965105</site_secure_code>
   </merchant>
   <transaction>
   <id>apitool_1533623s3</id>
   </transaction>
  </status>

## Github
JorgeSariego-MultiSafepay – (github)