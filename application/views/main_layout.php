<?php $this->load->view('component/head'); ?>

        <!-- Header -->
        <?php $this->load->view('layout/header'); ?>
        <!-- End Header -->

        <!-- Main -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <!-- Search -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- End Search -->

                    <!-- Sidebar Menu -->
                    <?php $this->load->view('layout/sidebar'); ?>
                    <!-- End Sidebar Menu -->
                </section>
            </aside>
            <!-- End Sidebar -->

            <!-- Right side column -->
            <aside class="right-side">
                <?php $this->load->view('subview'); ?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- End Main -->

<?php $this->load->view('component/script'); ?>