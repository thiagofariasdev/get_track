<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/main.js"></script>
<script>
  var isIE = /*@cc_on!@*/false || !!document.documentMode;
  var isFirefox = typeof InstallTrigger !== 'undefined';
  var isEdge = !isIE && !!window.StyleMedia;
  var isChrome = ((navigator.userAgent.toLowerCase().indexOf('chrome') > -1) &&(navigator.vendor.toLowerCase().indexOf("google") > -1));
  var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);
  var outp = {
    fire:isFirefox,
    edge: isEdge,
    chrome: isChrome,
    saf: isSafari
  }
  console.log(outp);
  if(isFirefox || isEdge || isChrome) {
  }else{
    $('body').addClass('no-webp');
  }
</script>