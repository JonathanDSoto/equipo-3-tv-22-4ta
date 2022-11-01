
<tr>
  <td>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6" style="overflow:hidden;">
        <div class="d-flex align-items-center">
          <div class="avatar-sm bg-light rounded p-1 me-2">
            <a href="detailsproductos?slug=<?php echo $lista->slug ?>" style="width:100%;">
              <img src="<?php echo $lista->cover ?>" alt="" class="img-fluid d-block" />
            </a>
          </div>
          <div>
            <h5 class="fs-14 my-1"><a href="detailsproductos?slug=<?php echo $lista->slug ?>" class="text-reset"><?php echo $lista->name ?></a></h5>
            <span class="text-muted">24 Apr 2021</span>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-2">
        <?php
        if (isset($lista->brand->name)) {
          echo '<h5 class="fs-14 my-1 fw-normal">' . $lista->brand->name . '</h5><span class="text-muted">Marca</span>';
        } else {
          echo '<h5 class="fs-14 my-1 fw-normal">Desconocida</h5><span class="text-muted">Marca</span>';
        }
        ?>

      </div>
      <div class="col-sm-12 col-md-3 col-lg-4 text-START">
        <a class="btn btn-warning" href="editproductos?slug=<?php echo $lista->slug ?>" type="button">Edit</a>
        <button class="btn btn-primary" onclick="desc('<?php echo $lista->name ?>','<?php echo $lista->description ?>')" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Description</button>
        <a class="btn btn-danger" href="eliminar?action=deleteP&idP=<?php echo $lista->id ?>" type="button">Delete</a>


      </div>
    </div>
  </td>
</tr>