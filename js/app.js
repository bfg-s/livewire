import Alpine from 'alpinejs';

window.Alpine = Alpine;
window.Toastr = require('toastr');
window.Swal = require('sweetalert2');
window.Turbolinks = require("turbolinks")

Alpine.start();
Turbolinks.start();

require('./turbolink');
require('./swal-events');
