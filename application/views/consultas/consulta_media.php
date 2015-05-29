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
