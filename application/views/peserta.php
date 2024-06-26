<!-- Content Wrapper. Contains page content -->
<div class="container">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ju">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                </div>/.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">

                                    <h3 class="card-title">Peserta HBH Ikatek Unhas terdaftar <b><?= $total; ?></b> orang </h3>
                                </div>
                                <div class="col-sm-6">

                                    <small class="float-right"> <?= date('Y-m-d H:i:s'); ?></small>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="row ">
                                <div class="container" style="margin-top:20px">
                                    <div>
                                        <div class="panel panel-primary">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12   ">

                                                        <div id="container" style="min-width: 400px; height: 300px; margin: 0 auto"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->


                    </div><!--/. container-fluid -->
                    <div class="row">

                        <div class="col-md-6">

                            <div class="card">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Angkatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (empty($export)) : ?>
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="alert alert-danger" role="alert">
                                                            data not found!
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php $i = 1; ?>
                                            <?php
                                            foreach ($export as $row) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td><?= $row['angkatan'] ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">

                            <div class="card">
                                <!-- <div class="card-header">
                                    <h3 class="card-title">Peserta HBH Ikatek Unhas <?= $total; ?></h3>
                                </div> -->
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="pencapaian" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Angkatan</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (empty($pencapaian)) : ?>
                                                <tr>
                                                    <td colspan="7">
                                                        <div class="alert alert-danger" role="alert">
                                                            data not found!
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php $i = 1; ?>
                                            <?php
                                            foreach ($pencapaian as $row) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['angkatan'] ?></td>
                                                    <td><?= $row['total'] ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- load library jquery dan highcharts -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highcharts-more.js"></script>
<!-- end load library -->


<!-- jQuery -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script type="text/javascript">
    $(function() {
        var chart;
        $(document).ready(function() {
            $.getJSON("<?php echo site_url('peserta/list'); ?>", function(json) {

                chart0 = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container',
                        type: 'column'
                    },
                    accessibility: {
                        enabled: false
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: ['1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022']
                    },
                    yAxis: {
                        title: {
                            text: 'Daftar Peserta'
                        }
                    },
                    labels: {
                        items: [{
                            html: '',
                            style: {
                                left: '50px',
                                top: '18px',
                                color: ( // theme
                                    Highcharts.defaultOptions.title.style &&
                                    Highcharts.defaultOptions.title.style.color
                                ) || 'black'
                            }
                        }]
                    },
                    plotOptions: {
                        column: {
                            // stacking: 'percen',
                            dataLabels: {
                                enabled: true,
                                crop: false,
                                overflow: 'none'
                            }
                        }
                    },
                    series: json
                });;

            });

        });

    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        var options = {
            chart: {
                renderTo: 'mygraph',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            accessibility: {
                enabled: false
            },
            title: {
                text: 'Potensi Jaring Suara'
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: 'green',
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) + ' % ';
                        }
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: []
            }]
        }

        $.getJSON("<?php echo site_url('peserta/list'); ?>", function(json) {
            options.series[0].data = json;
            chart = new Highcharts.Chart(options);
        });

    });
</script> -->
<!-- <script type="text/javascript">
    $(function() {

        var data_total = <?php echo $total; ?>;
        var data_angkatan = <?php echo $angkatan; ?>;

        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Yearly Website Ratio'
            },
            xAxis: {
                categories: data_angkatan
            },
            yAxis: {
                title: {
                    text: 'Rate'
                }
            },
            series: [{
                name: 'data_angkatan',
                data: data_total
            }]
        });
    });
</script> -->


<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", {
                extend: 'pdf',
                orientation: 'landscape'
            }, "print"],
            searching: false

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });
</script>
<script>
    $(function() {
        $("#pencapaian").DataTable({
            sDom: 'lrtip',
            "search": false,
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,

        })

    });
</script>