PHP Fornicator
===============

What it do?
------------

While you are deploying your software, Fornicator fornicates it.

* Clears APC cache
* Clears realpath and stat caches

How it do?
-----------

Configurations can be found in conf. The method of operations is dead simple. 

* Tweak configuration for you specific needs if need be.
* Create fornicator vhost.
* Call "fornicator.axis-of-evil.org" domain. It always goes to localhost.
* Use parameters "apc" and "stat" to define what to clear.

