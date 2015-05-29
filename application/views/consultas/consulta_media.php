<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>APP WEB</title>
  </head>
  <body>
    <header> 
      <div class="container">
        <h1>APP WEB</h1>
      </div>
    </header>

    <div class="container">
    <table>
      <tr>
        <th>Numero_Departamento</th>
        <th>Numero_Empleado</th>
      </tr>
      <tbody>
        <?php 
        foreach($departmento as $department){ ?>
          <tr>
            <td><?php echo $department->emp_no ?></td>
            <td><?php echo $department->dept_no ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </body>
</html>


<style type="text/css">
header{
    background: #009001;
    margin-bottom: 50px;
    background: #009001;
    width: 100%;
    position: absolute;
    left: 0%;
    top: 0px;
}

body{
  background: #E6E6E6;
}


</style>
