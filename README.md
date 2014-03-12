PHP Fornicator
===============

What it do?
------------

While you are deploying your software, Fornicator fornicates it.

* Clears APC cache
* Clears realpath and stat caches
* Clears Zend Optimizer cache

How it do?
-----------

Configurations can be found in conf. The method of operations is dead simple.

* Tweak configuration for you specific needs if need be.
* Create fornicator vhost.
* Call "fornicator.tunk.io" domain. It always goes to localhost.
* Use parameters "apc", "stat" and "optimizer" to define what to clear.

