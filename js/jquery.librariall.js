function addEvent(element, event, fn) {
    if (element.addEventListener) {
        element.addEventListener(event, fn, false);
    } else if (element.attachEvent) {
        element.attachEvent('on' + event, fn);
    }
}

function loadScript(src, callback)
{
  var s,
      r,
      t,
      scripts,
      write;
      
  if (Array.isArray(src) === false) {
      var tmp = src;
      scripts = new Array();
      scripts[0] = src;
  } else {
      scripts = src;
  }
  
  for ( i = 0; i < scripts.length; i++) {
    write = scripts[i].split("/");
    r = false;
    s = document.createElement('script');
    s.type = 'text/javascript';
    s.src = scripts[i];
    if (i == scripts.length - 1) {
        s.onload = s.onreadystatechange = function() {
            if ( !r && (!this.readyState || this.readyState == 'complete') )
            {
                r = true;
                if (callback !== undefined) {
                    callback();
                }
            }
        };
    }
    t = document.getElementsByTagName('script')[0];
    t.parentNode.insertBefore(s, t);  
  }
}

addEvent(window, 'load', function(){ loadScript(
        'js/jquery.min.js', 
        function () { loadScript(
                                new Array(
                                'js/libreria.js',
                                'js/jssor.js',
                                'js/jssor.slider.js',
                                'js/jssor.slider.min.js',
                                'js/jquery.fancybox.pack.js?v=2.1.5',
                                'js/main.js'), 
                                function () { loadScript('js/script.js')})
        } );
});