<!DOCTYPE html>
<html>
    <head>
        <body>
            {{--  Modal Tambah Data Product  --}}
            <div class="modal fade" id="tambahProduct" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="tambahproductLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="tambahproductLabel">Tambah Data product</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="custom-file mb-3">
                                <label for="image">image</label>
                                <input type="file" class="text-center center-block file-upload "name="image">
                            </div>
            
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
            
                    </div>
                    <div class="modal-footer">
                    </div>
                    </div>
                </div>
            </div>
        </body>
    </head>
</html>