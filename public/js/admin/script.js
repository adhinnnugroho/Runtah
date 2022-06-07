$("#Logout").on("click", function (e) {
  e.preventDefault();
  const linkLogout = $(this).attr("href");
  Swal.fire({
    title: 'Kamu mau logout?',
    text: "",
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Logout'
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = linkLogout;
    }
  })
});


function preview() {
  const gambarYangDipilih = document.querySelector('#gambar');
  const gambarPriview = document.querySelector('#GambarPreviev');
  gambarYangDipilih.files[0].name;
  const file = new FileReader();
  file.readAsDataURL(gambarYangDipilih.files[0]);
  file.onload = function (e) {
    gambarPriview.src = e.target.result;
  }
}