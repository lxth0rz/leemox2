(function (_, $) {
  $.ceEvent('on', 'ce.history_load', function (url) {
    if (typeof ga != 'undefined') {
      //According google analytics documentation URL should start with / symbol
      ga('send', 'pageview', url.replace('!', ''));
    }
  });
})(Tygh, Tygh.$);