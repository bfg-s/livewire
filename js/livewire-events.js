Livewire.on('swal:confirm', detail => {
    Swal.fire({
        title: detail.title,
        text: detail.text,
        icon: 'question',
        showCancelButton: true,
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit(detail.confirmEvent, detail.confirmParams);
        }
    })
});
Livewire.on('swal:success', detail => {
    Swal.fire(
        detail[0] ? detail[0] : (detail.title ? detail.title : ''),
        detail[1] ? detail[1] : (detail.text ? detail.text : ''),
        'success'
    )
});
Livewire.on('swal:error', detail => {
    Swal.fire(
        detail[0] ? detail[0] : (detail.title ? detail.title : ''),
        detail[1] ? detail[1] : (detail.text ? detail.text : ''),
        'error'
    )
});
Livewire.on('swal:warning', detail => {
    Swal.fire(
        detail[0] ? detail[0] : (detail.title ? detail.title : ''),
        detail[1] ? detail[1] : (detail.text ? detail.text : ''),
        'warning'
    )
});
Livewire.on('swal:info', detail => {
    Swal.fire(
        detail[0] ? detail[0] : (detail.title ? detail.title : ''),
        detail[1] ? detail[1] : (detail.text ? detail.text : ''),
        'info'
    )
});
Livewire.on('swal', (detail = {}) => {
    Swal.fire(detail)
});
Livewire.on('toastr:success', (detail = []) => {
    if (! Array.isArray(detail)) detail = [detail];
    Toastr.success(...detail);
});
Livewire.on('toastr:error', (detail = [])  => {
    if (! Array.isArray(detail)) detail = [detail];
    Toastr.error(...detail);
});
Livewire.on('toastr:warning', (detail = [])  => {
    if (! Array.isArray(detail)) detail = [detail];
    Toastr.warning(...detail);
});
Livewire.on('toastr:info', (detail = [])  => {
    if (! Array.isArray(detail)) detail = [detail];
    Toastr.info(...detail);
});
Livewire.on('visit', (detail = [])  => {
    if (! Array.isArray(detail)) detail = [detail];
    Turbolinks.visit(...detail);
});
