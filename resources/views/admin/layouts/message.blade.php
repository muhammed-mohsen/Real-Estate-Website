@if (Session::has('success'))
<script>
let timerInterval
Swal.fire({
  title: '<strong>{{Session::get('success')}}',
  html: 'هذه الرسالة سوف تختفى بعد 4 ثوانى',
  timer: 4000,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      Swal.getContent().querySelector('strong')
        .textContent = Swal.getTimerLeft()
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.timer
  ) {
    console.log('I was closed by the timer')
  }
})

    </script>
    {{-- html: '<strong>{{Session::get('success')}}</strong>', --}}
@endif
