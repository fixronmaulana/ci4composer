<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
     <div class="card-body">
         <button type="button" class="btn btn-primary">Tambah Data</button>
         <hr>
         <div class="alert alert-primary" role="alert">
             A simple primary alert—check it out!
         </div>
         <hr>
         <table class="table">
             <thead>
                 <tr>
                     <th scope="col">No Pegawai</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Departemen</th>
                     <th scope="col">Aksi</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>Otto</td>
                     <td>
                         <button type="button" class="btn btn-info">Ubah</button>
                         <button type="button" class="btn btn-danger">Hapus</button>
                     </td>
                 </tr>

             </tbody>
         </table>
     </div>
 </div>

 <?= $this->endsection('content'); ?>