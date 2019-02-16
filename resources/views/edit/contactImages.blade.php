<!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
    <main class="main minh-100vh" id="top">


  <!-- ============================================-->
  <!-- Preloader ==================================-->
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale-pulse-out-rapid">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
  <!-- ============================================-->
  <!-- End of Preloader ===========================-->


  <!-- Page Title -->
  <br>
  <h1 align='center'>
    Images for Contact Page:
  </h1>
  <br>
  <!-- End of page title -->

  <!-- Table of carriers -->
  <table width="80%" align="center">

    <!-- Table head -->
    <thead>
      <tr>
        <th>
          <strong>
            Name
          </strong>
        </th>
        <th>
          <strong>
            Source
          </strong>
        </th>
        <th>
          <strong>
            Upload
          </strong>
        </th>
      </tr>
    </thead>
    <!-- End of table head -->

    <!-- Table body -->
    <tbody>
    <?php
    // Set the initial background color.
    $bg='#eeeeee';

    while($row = $results->fetch(PDO::FETCH_NUM)): // WHILE LOOP to display all results:
      $bg=($bg == '#eeeeee' ? '#ffffff' : '#eeeeee');
    ?>
    
    <form method="post" action="" enctype="multipart/form-data">
      <tr bgcolor="<?= $bg ?>" align="left">
      <td>
        <?= $row[1] ?>
      </td>
      <td>
        <?= $row[2] ?>
      </td>
      <td>
        <input type="file"name="upload" >
      </td>
      <td>
        <input type="submit" name="submit" class="btn btn-block btn-dark mt-4">
      </td>
        <input type="hidden" name = "fileId" value="<?= $row[0] ?>">
        <input type="hidden" name="MAX_FILE_SIZE" value="524288">
        <input type="hidden" name="dataBase" value="contactImg">
      </form>
      
    </tbody>
    <!-- End of table body -->
    <?php
      endwhile;
     ?>
  </table>
</div>
</main>
<br>