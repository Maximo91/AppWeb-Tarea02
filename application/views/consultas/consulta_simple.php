    <div class="container">
      <table>
          <tr>
            <th>Numero</th>
            <th>|</th>
            <th>Nombre</th>
          </tr>
          <tbody>
            <?php
            foreach($departmento as $department){ ?>
              <tr>
                <td><?php echo $department->dept_no ?></td>
                <th>|</th>
                <td><?php echo $department->dept_name ?></td>
              </tr>
            <?php }?>
          </tbody>
      </table>
    </div>
  </body>
</html>
