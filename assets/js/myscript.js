const flashData = $('.flash-data').data('flashdata');

const tombolHapus = $('.tombolHapus').on('click',function(e){
  e.preventDefault();
  const href = $(this).attr('href');
  console.log(href);
  Swal.fire({
    title: "Kamu Yakin?",
    text: "Data Akan dihapus dari database",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya,Hapus"
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  })
})
if (flashData){
  Swal.fire({
    title: 'Data Mahasiswa ',
    text : 'Berhasil ' + flashData,
    icon: "success"
  });
}

