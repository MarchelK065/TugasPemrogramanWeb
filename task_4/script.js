document.getElementById('registrationForm').addEventListener('submit', function (event) {
  const fileInput = document.getElementById('file');
  const file = fileInput.files[0];
  if (file) {
      const fileSizeInKB = file.size / 1024;
      const fileType = file.type;
      if (fileSizeInKB > 100) {
          alert("Ukuran file tidak boleh lebih dari 100KB.");
          event.preventDefault();
      }
      if (fileType !== "text/plain") {
          alert("Hanya file .txt yang diperbolehkan.");
          event.preventDefault();
      }
  }
});
