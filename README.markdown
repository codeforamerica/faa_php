Overview
========

PHP API Library for FAA Api
http://services.faa.gov/

Airport Service
Description

Serves airport status and delay information from the Air Traffic Control System Command Center (ATCSCC) as displayed on http://fly.faa.gov/.

Usage
=====

<pre>

// Base API Class
require 'APIBaseClass.php';

require 'faaApi.php';

$new = new faaApi();

// Debug information
die(print_r($new).print_r(get_object_vars($new)).print_r(get_class_methods(get_class($new))));

</pre>

Output
======
