(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["home"],{

/***/ "./assets/home.js":
/*!************************!*\
  !*** ./assets/home.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {__webpack_require__(/*! core-js/modules/es.array.includes */ "./node_modules/core-js/modules/es.array.includes.js");

__webpack_require__(/*! core-js/modules/es.string.includes */ "./node_modules/core-js/modules/es.string.includes.js");

var pseudos = $('.js-user-list').data('userList');
console.log(pseudos);
console.log("ready");
$("#pseudo").on('focusout', function () {
  if ($(this).val() > "") {
    if (!pseudos.includes($(this).val())) {
      console.log('pseudo : ' + $('#pseudo').val());
    } else {
      var flash = $(document.createElement('span'));
      flash.addClass('alert alert-danger alert-dismissible fade show').text('Pseudo déjà utilisé');
      $('#pseudo').parent().append(flash);
      console.log('pseudo deja pris');
    }
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ })

},[["./assets/home.js","runtime","vendors~app~home","vendors~home"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvaG9tZS5qcyJdLCJuYW1lcyI6WyJwc2V1ZG9zIiwiJCIsImRhdGEiLCJjb25zb2xlIiwibG9nIiwib24iLCJ2YWwiLCJpbmNsdWRlcyIsImZsYXNoIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwiYWRkQ2xhc3MiLCJ0ZXh0IiwicGFyZW50IiwiYXBwZW5kIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7O0FBQ0EsSUFBTUEsT0FBTyxHQUFHQyxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CQyxJQUFuQixDQUF3QixVQUF4QixDQUFoQjtBQUNBQyxPQUFPLENBQUNDLEdBQVIsQ0FBWUosT0FBWjtBQUNBRyxPQUFPLENBQUNDLEdBQVIsQ0FBWSxPQUFaO0FBQ0FILENBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYUksRUFBYixDQUFnQixVQUFoQixFQUEyQixZQUFVO0FBQ2pDLE1BQUdKLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssR0FBUixLQUFnQixFQUFuQixFQUNBO0FBQ0ksUUFBRyxDQUFDTixPQUFPLENBQUNPLFFBQVIsQ0FBaUJOLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssR0FBUixFQUFqQixDQUFKLEVBQW9DO0FBQ2hDSCxhQUFPLENBQUNDLEdBQVIsQ0FBWSxjQUFZSCxDQUFDLENBQUMsU0FBRCxDQUFELENBQWFLLEdBQWIsRUFBeEI7QUFDSCxLQUZELE1BRU87QUFDSCxVQUFJRSxLQUFLLEdBQUdQLENBQUMsQ0FBQ1EsUUFBUSxDQUFDQyxhQUFULENBQXVCLE1BQXZCLENBQUQsQ0FBYjtBQUNBRixXQUFLLENBQUNHLFFBQU4sQ0FBZSxnREFBZixFQUFpRUMsSUFBakUsQ0FBc0UscUJBQXRFO0FBQ0FYLE9BQUMsQ0FBQyxTQUFELENBQUQsQ0FBYVksTUFBYixHQUFzQkMsTUFBdEIsQ0FBNkJOLEtBQTdCO0FBQ0FMLGFBQU8sQ0FBQ0MsR0FBUixDQUFZLGtCQUFaO0FBQ0g7QUFDSjtBQUVKLENBYkQsRSIsImZpbGUiOiJob21lLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXHJcbmNvbnN0IHBzZXVkb3MgPSAkKCcuanMtdXNlci1saXN0JykuZGF0YSgndXNlckxpc3QnKTtcclxuY29uc29sZS5sb2cocHNldWRvcyk7XHJcbmNvbnNvbGUubG9nKFwicmVhZHlcIik7XHJcbiQoXCIjcHNldWRvXCIpLm9uKCdmb2N1c291dCcsZnVuY3Rpb24oKXtcclxuICAgIGlmKCQodGhpcykudmFsKCkgPiBcIlwiKVxyXG4gICAge1xyXG4gICAgICAgIGlmKCFwc2V1ZG9zLmluY2x1ZGVzKCQodGhpcykudmFsKCkpKXtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ3BzZXVkbyA6ICcrJCgnI3BzZXVkbycpLnZhbCgpKTtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICB2YXIgZmxhc2ggPSAkKGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKSk7XHJcbiAgICAgICAgICAgIGZsYXNoLmFkZENsYXNzKCdhbGVydCBhbGVydC1kYW5nZXIgYWxlcnQtZGlzbWlzc2libGUgZmFkZSBzaG93JykudGV4dCgnUHNldWRvIGTDqWrDoCB1dGlsaXPDqScpO1xyXG4gICAgICAgICAgICAkKCcjcHNldWRvJykucGFyZW50KCkuYXBwZW5kKGZsYXNoKTtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coJ3BzZXVkbyBkZWphIHByaXMnKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcbiAgICBcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==