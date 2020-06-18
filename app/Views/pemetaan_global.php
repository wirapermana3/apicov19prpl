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
            <b><?= $positif['value']; ?> Orang </b>
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
            <b><?= $sembuh['value']; ?> Orang </b>
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
            <b><?= $meninggal['value']; ?> Orang </b>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<script>
    var mymap = L.map('mapid').setView([31.705205, 20.436997], 2);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);
    <?php foreach ($global as $key => $value) { ?>
        L.marker([<?= $value['attributes']['Lat'] ?>, <?= $value['attributes']['Long_'] ?>]).addTo(mymap)
            .bindPopup("Provinsi : <?= $value['attributes']['Country_Region'] ?><br>" +
                "Positif = <?= $value['attributes']['Confirmed'] ?><br>" +
                "Sembuh = <?= $value['attributes']['Recovered'] ?><br>" +
                "Meninggal = <?= $value['attributes']['Deaths'] ?><br>");
    <?php } ?>
</script>