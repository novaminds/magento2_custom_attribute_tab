Synopsis:

Our Custom Tab Extension for Magento2 is simple and very useful.
That allow you to add your own tab in product page next to Reviews, Details and More Informations. 

Features:

If You have in a certain situation an important product attribute,
or whatever attribute that a product specialized with and you would rather to put it (as a tab)next to Reviews,
so the customer would see it directly.

![alt text](http://www.nmcit.com/wp-content/uploads/2018/03/tab.png)



You can set the store view label for the tab.
Just go to Stores->Configuration->CUSTOM PRODUCT TAB->Custom Tab

![alt text](http://www.nmcit.com/wp-content/uploads/2018/03/tabConfig.png)



To put the value of that custom tab(attribute).
You will find it in Attributes group when you are adding 
a new product or editing a product.

![alt text](http://www.nmcit.com/wp-content/uploads/2018/03/setTapValue.png)



Note:
If you don't set a value for the tab it doesn't show up in product page (frontend).
namespace/Module directory must be NovaMinds/Customattribute.
Our extension add the Customattribute(custom attribute)
to the Default attribute set, if your product has a deffirent attribute set 
that doesn't based on the Default attribute set, then you will have to add
Customattribute to the product attribute set

If you faced any problem, please tell us.

Installation:

To install our extension just put it in app/code/NovaMinds/Customattribute directory, 
cd to your magento2 root directory and run magento command: 
php bin/magento setup:upgrade


License:

Open Source

