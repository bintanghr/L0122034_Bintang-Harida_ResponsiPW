@if (session('success'))
    <div class='toast d-flex align-items-center position-absolute top-0 start-50 translate-middle-x text-bg-primary' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-body'>
        {{ session('success') }}
        </div>
        <button type='button' class='btn-close btn-close-white ms-auto me-2' data-bs-dismiss='toast' aria-label='Close'></button>
    </div>
@elseif (session('failed')) {
    <div class='toast d-flex align-items-center position-absolute top-0 start-50 translate-middle-x text-bg-danger' role='alert' aria-live='assertive' aria-atomic='true'>
        <div class='toast-body'>
        {{ session('failed') }}
        </div>
        <button type='button' class='btn-close btn-close-white ms-auto me-2' data-bs-dismiss='toast' aria-label='Close'></button>
    </div>
}
@endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, { autohide: true })
        })
        toastList.forEach(toast => toast.show());
    });
</script>
