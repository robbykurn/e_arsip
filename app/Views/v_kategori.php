<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-solid">
            <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">
                        <i class="fas fa-plus">Add</i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="80px ">No</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kategori as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value['nama_kategori'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>