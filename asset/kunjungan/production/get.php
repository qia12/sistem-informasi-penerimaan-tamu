<form method= "post" name="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-2 py-4">
            <div class="card-body">
                <img src="../asset/images/logo.png" class="mx-auto d-block" alt="Logo Bakrie Pipe ">
                <h5 class="information mt-4 mb-4 text-center">Konfirmasi Kunjungan</h5>
                 
                <label class="form-check-visit">Apakah Anda Bersedia Menerima?
                <span class="error">* <?//php echo $psjErr?></span>
                </label>
                <?php foreach ($contacts as $key => $value) : ?>
                <div class="row mb-2">
                    <div class="col-sm-12">

                        <div class="form-radio" required>
                            <input class="form-check-input" type="radio" name="psj1" value="ya">
                            <label class="form-check-label" for="psj1">
                                Ya
                            </label>
                        </div>
                        <div class="form-radio">
                            <input class="form-check-input" type="radio" name="psj1" value="tidak">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Tidak
                            </label>
                        </div>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span></span>
                                <input class="form-control" id="ket" name="ket" placeholder="Keterangan" required>     
                                <span class="error">* <?php //echo $ketErr?></span>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-3 mt-3 mb-3">
                <button class="btn btn-primary btn-block confirm-button" type="konfirmasi" name="konfirmasi" value="KONFIRMASI" onclick="">Konfirmasi</button>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</form>