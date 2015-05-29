    <div class="container">
    <table>
      <tr>
        <th>Titulo</th>
        <th>Cumpleaños</th>
        <th>Salario</th>
        <th>Numero_Dept</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha_Contrato</th>
      </tr>
      <tbody>
        <?php 
        foreach($Personas as $persona){ ?>
          <tr>
            <td><?php echo $persona->title ?></td>
            <td><?php echo $persona->birth_date ?></td>
            <td><?php echo $persona->salary ?></td>
            <td><?php echo $persona->first_name ?></td>
            <td><?php echo $persona->last_name ?></td>
            <td><?php echo $persona->hire_date ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </body>
</html>

