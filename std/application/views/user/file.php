                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tbel File</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>id_user</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <?php
                                            $no = 1;
                                            foreach ($foto as $t) {
                                            ?>
                                                <td><?= $no++; ?></td>
                                                <td><?= $t->name ?></td>
                                                <td><?= $t->email ?></td>
                                                <td><?= $t->id_user ?></td>
                                                <td><img src="<?= base_url('assets/img/foto/') . $t->image ?>" class="card-img" style="width: 100px;">
                                                    <a href="<?php echo base_url() . 'user/download/' . $t->id; ?>" class="btn btn-success btn-circle btn-sm ml-4">
                                                        <span class="glyphicon glyphicon-download-alt">
                                                            <i class="fas fa-download"></i></a>
                                                </td>


                                        </tr>

                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->