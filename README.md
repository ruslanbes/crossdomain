Cross-Domain Javascript demo
=======
Demo for the [article on cross-domain ajax](http://ruslanbes.com/devblog/2014/10/12/jquery-cross-site-scripting-tutorial-and-demo/). 

License
-------
[MIT License](http://opensource.org/licenses/MIT)

Installing
-------
If you want to run it on your own server:

1. Download the code and unpack it.
2. Rename the "crossdomain-master" folder to "crossdomain"
3. Globally find-replace "ruslanbes.com" → "yourdomain.com"
4. Upload "crossdomain" folder to you site to public_html, so that the web path to this readme becomes http://yourdomain.com/crossdomain/README.md
5. Create 6 subdomains:
    - alice.yourdomain.com → yourdomain.com/crossdomain/alice
    - bob.yourdomain.com → yourdomain.com/crossdomain/bob
    - cindy.yourdomain.com → yourdomain.com/crossdomain/cindy
    - douglas.yourdomain.com → yourdomain.com/crossdomain/douglas
    - eve.yourdomain.com → yourdomain.com/crossdomain/eve
    - fred.yourdomain.com → yourdomain.com/crossdomain/fred