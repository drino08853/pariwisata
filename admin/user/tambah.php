 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Form Add User</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="./">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Form Add User</li>
         </ol>
     </div>

     <!-- Horizontal Form -->
     <div class="col-lg-7">
         <div class="card mb-4">
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Form Add User</h6>
             </div>
             <div class="card-body">
                 <form action="user/proses_tambah.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">User Name</label>
                         <div class="col-sm-9">
                             <input type="text" name="username" class="form-control">
                         </div>
                     </div>



                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-9">
                             <input type="password" name="password" class="form-control">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                         <div class="col-sm-9">
                             <input type="text" name="nama_lengkap" class="form-control">
                         </div>
                     </div>

                     <div class="form-group row">
                         <label class="col-sm-3 col-form-label">Foto</label>
                         <div class="col-sm-9">
                             <input type="file" name="foto" class="form-control">
                         </div>
                     </div>


                     <div class="form-group row">
                         <div class="col-sm-10">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>