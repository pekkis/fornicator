PHP Fornicator
===============

What it do?
------------

While you are deploying your software, Fornicator fornicates all relevant caches in HTTP context as is needed by
opcaching.

* Realpath and stat caches
* APC
* Zend Optimizer
* Zend OpCache
* XCache (ini setting xcache.admin.enable_auth must be set to 0)

How it do it?
--------------

Configurations can be found in conf. The method of operations is dead simple.

* Tweak for you specific needs if need be.
* Create fornicator vhost.
* Call "fornicator.tunk.io" domain. It always goes to localhost.
* Ta da! All caches are thoroughly molested.

