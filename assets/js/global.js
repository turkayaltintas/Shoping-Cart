
function __Alert(title = 'Bildirim', body, icon = 'info') {
    Swal.fire(title, body, icon);
}

function __AlertTimer() {
    let timerInterval
    Swal.fire({
        title: 'Loading..',
        html: 'Wait..',
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    })
}


function reloadSetTimeOut(time = 2000){
    setTimeout(location.reload(true), time);
}