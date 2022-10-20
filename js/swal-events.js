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
