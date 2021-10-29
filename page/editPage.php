<?php
    include '../component/navbar.php'
?>
<!-- Content -->
    <div class="content mt-5" id="addPage" >
      <!-- Body -->
        <div class="container">
            <form action="../process/createProcess" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="ilustrasi" class="form-label">Ilustrasi</label>
                    <input type="text" class="form-control" id="ilustrasi" name="ilustrasi">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="story" class="form-label">Story</label>
                    <input type="text" class="form-control" id="story" name="story">
                </div>
                <div class="d-grip gap-2">
                    <button type="submit" class="btn btn-primary" name="add">Tambah</button>
                </div>
            </form>
        </div>
    </div>
<?php
    include '../component/footer.php'
?>