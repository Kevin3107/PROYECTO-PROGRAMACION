<?php
include("../../bd.php");

if($_POST){
  print_r($_POST);
  print_r($_FILES);
// Recolectamos los datos del método POST
$primernombre=(isset($_POST["primernombre"])?$_POST["primernombre"]:"");
$segundonombre=(isset($_POST["segundonombre"])?$_POST["segundonombre"]:"");
$primerapellido=(isset($_POST["primerapellido"])?$_POST["primerapellido"]:"");
$segundoapellido=(isset($_POST["segundoapellido"])?$_POST["segundoapellido"]:"");

$foto=(isset($_FILES["foto"]['name'])?$_FILES["foto"]['name']:"");
$cv=(isset($_FILES["cv"]['name'])?$_FILES["cv"]['name']:"");


$idpuesto=(isset($_POST["idpuesto"])?$_POST["idpuesto"]:"");
$fechadeingreso=(isset($_POST["fechadeingreso"])?$_POST["fechadeingreso"]:"");

$sentencia=$conexion->prepare("INSERT INTO 
`tbl_empleados` (`id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `foto`, `cv`, `idpuesto`, `fechadeingreso`) 
VALUES (NULL,:primernombre,:segundonombre,:primerapellido,:segundoapellido,:foto,:cv,:idpuesto,:fechadeingreso);");

$sentencia->bindParam(":primernombre",$primernombre);
$sentencia->bindParam(":segundonombre",$segundonombre);
$sentencia->bindParam(":primerapellido",$primerapellido);
$sentencia->bindParam(":segundoapellido",$segundoapellido);

$sentencia->bindParam(":foto",$foto);
$sentencia->bindParam(":cv",$cv);

$sentencia->bindParam(":idpuesto",$idpuesto);
$sentencia->bindParam(":fechadeingreso",$fechadeingreso);


}
$sentencia = $conexion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia -> execute();
$lista_tbl_puestos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">Datos del Empleado</div>
    <div class="card-body">
      <form action="" method="post"enctype="multipart/form-data">

      <div class="mb-3">
        <label for="primernombre" class="form-label">Primer Nombre</label>
        <input
            type="text"
            class="form-control"
            name="primernombre"
            id="primernombre"
            aria-describedby="helpId"
            placeholder="Primer Nombre"
        />
      </div>
      
      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo Nombre</label>
        <input
            type="text"
            class="form-control"
            name="segundonombre"
            id="segundonombre"
            aria-describedby="helpId"
            placeholder="Segundo Nombre"
        />
      </div>
      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer Apellido</label>
        <input
          type="text"
          class="form-control"
          name="primerapellido"
          id="primerapellido"
          aria-describedby="helpId"
          placeholder="Primer Apellido"
        />
      </div>

      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo Apellido</label>
        <input
          type="text"
          class="form-control"
          name="segundoapellido"
          id="segundoapellido"
          aria-describedby="helpId"
          placeholder="Segundo Apellido"
        />
      </div>
      
      <div class="mb-3">
        <label for="foto" class="form-label">Foto: </label>
        <input
          type="file"
          class="form-control"
          name="foto"
          id="foto"
          aria-describedby="helpId"
          placeholder="Foto"
        />
      </div>
      
      <div class="mb-3">
        <label for="cv" class="form-label">CV(PDF)</label>
        <input
          type="file"
          class="form-control"
          name="cv"
          id="cv"
          placeholder="CV"
          aria-describedby="fileHelpId"
        />
      </div>
      
      <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select
          class="form-select form-select-sm"
          name="idpuesto"
          id="idpuesto"
        >
        <?php foreach ($lista_tbl_puestos as $registro) {?>
          <option value="<?php echo $registro['id'];?>">
          <?php echo $registro['nombredelpuesto']?>
        </option>
          <?php } ?>
        </select>

      </div>

      <div class="mb-3">
        <label for="fechadeingreso" class="form-label">Fecha de Ingreso</label>
        <input
          type="date"
          class="form-control"
          name="fechadeingreso"
          id="fechadeingreso"
          aria-describedby="emailHelpId"
          placeholder="Fecha de Ingreso"
        />
      </div>
      
      <button
        type="submit"
        class="btn btn-success"
      >
        Agregar Registro
      </button>

      <a
        name=""
        id=""
        class="btn btn-primary"
        href="index.php"
        role="button"
        >Cancelar</a
      >
      
      
      
      
      </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>



<?php include("../../templates/footer.php"); ?>