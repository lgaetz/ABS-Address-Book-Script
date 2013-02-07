ABS-Address-Book-Script
=======================

Fork of the project Address Book Script:
http://www.phpkobo.com/address_book.php
and customized for Asterisk users

This is a work in progress

Installation
============

* Copy project files into subfolder of webroot, chown and chmod as req'd
* Follow instructions here for installing ABS: http://www.phpkobo.com/doc.php?d=install&p=AB201-117
* manually create the MySQL database and user (if req'd) using instructions here: http://www.phpkobo.com/doc.php?d=setup_db_params&p=
* For Asterisk click to dial integration, locate the file asterisk/config.php and set the variables as req'd for your PBX

Usage
=====

* Browse to <server IP>/<abs folder>/staff
* Login first time with admin/password
* Create login credentials for each user and include the extension # of each user in the form SIP/201
* Create address book entires, Digits only for tel number column (for the present)
* In search mode, phone number column entries are links.  When clicked the PBX will bridge a call between that number and the user's ext number
 


ABS License:
============
 Address Book Script ReadMe File
 Homepage URL : http://www.phpkobo.com/address_book.php
 ID : AB201-117 [G100]


[Installation Guide]

The installation guide is available at
http://www.phpkobo.com/doc.php?d=install&p=AB201-117

[GNU License]

This script is a open-source script and is released under
the terms of the GPL license. You can redistribute it
and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.


