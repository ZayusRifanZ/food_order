<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="/img/eat.png">

    </div>
    <script>
      $('.parallax-window').parallax({imageSrc: '/img/eat.png'});
    </script> -->
<div class="panel-body img" >
    <img src="img/eat.png">
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>order_list/tambah" class="btn btn-primary">Pesan + </a>
    </div>
  </div>
  <table class="table text-center mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Meja</th>
        <th scope="col">Pesanan Makan</th>
        <th scope="col">Pesanan Minum</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($order_list as $ol) : ?>
        <tr>
          
          <th scope="row"><?= $ol['Id'] ?></th>
          <td><?= $ol['nama'] ?></td>
          <td><?= $ol['meja'] ?></td>
          <td><?= $ol['makan'] ?></td>
          <td><?= $ol['minum'] ?></td> 
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>