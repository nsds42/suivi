// app.js
import 'bootstrap';
import 'bootstrap-sass';
import 'popper.js';
import 'jquery';

// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it

// or you can include specific pieces

jQuery(document).ready(function() {
            $('.js-datepicker').datepicker();
});
