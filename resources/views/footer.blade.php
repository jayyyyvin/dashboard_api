<script>
    function logout()
    {
        swal({
  title: "Are you sure?",
  text: "You want to logout?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location.href = '/';
  }
});
    }

    
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>