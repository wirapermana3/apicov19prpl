<div class="col-lg-6 col-12">
    <div class="card card-warning collapsed-card">
        <div class="card-header">
            <h3 class="card-title">Jumlah Kasus Positif</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <b><?= $nasional[0]['positif']; ?> Orang </b>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
<div class="col-lg-6 col-12">
    <div class="card card-success collapsed-card">
        <div class="card-header">
            <h3 class="card-title">Jumlah Kasus Sembuh</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <b><?= $nasional[0]['sembuh']; ?> Orang </b>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-sm-12">
    <div id="mapid" style="height: 550px;"></div>
</div>

<div class="col-lg-12 col-12">
    <div class="card card-danger collapsed-card">
        <div class="card-header">
            <h3 class="card-title">Jumlah Kasus Meninggal</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <b><?= $nasional[0]['meninggal']; ?> Orang </b>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<script>
    var mymap = L.map('mapid').setView([-1.973104, 117.668911], 5);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);
    <?php foreach ($provinsi['features'] as $key => $value) { ?>
        L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
            .bindPopup("Provinsi : <?= $value['attributes']['Provinsi'] ?><br>" +
                "Positif = <?= $value['attributes']['Kasus_Posi'] ?><br>" +
                "Sembuh = <?= $value['attributes']['Kasus_Semb'] ?><br>" +
                "Meninggal = <?= $value['attributes']['Kasus_Meni'] ?><br>");
    <?php } ?>
</script>