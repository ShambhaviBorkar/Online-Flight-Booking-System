<?php 
include_once 'header.php'; 
include_once 'footer.php';
require '../helpers/init_conn_db.php';

if(isset($_POST['del_flight']) and isset($_SESSION['adminId'])) {
  $flight_id = $_POST['flight_id'];
  $sql = 'DELETE FROM Flight WHERE flight_id=?';
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)) {
    header('Location: ../index.php?error=sqlerror');
    exit();            
  } else {  
    mysqli_stmt_bind_param($stmt,'i',$flight_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    echo("<script>location.href = 'all_flights.php';</script>");
    exit();
  }
}
?>

<style>
table {
  background-color: white;
}
h1 {
  margin-top: 20px;
  margin-bottom: 20px;
  font-family: 'product sans';  
  font-size: 45px !important; 
  font-weight: lighter;
}
a:hover {
  text-decoration: none;
}
body {
  background-color: #efefef;
}
th {
  font-size: 22px;
}
td {
  margin-top: 10px !important;
  font-size: 16px;
  font-weight: bold;
  font-family: 'Assistant', sans-serif !important;
}
button.btn img {
  filter: invert(1);
}
#sub1 {
  margin-top: 10px;
}
</style>

<main>
<?php if(isset($_SESSION['adminId'])) { ?>
  <div class="container-md mt-2">
    <h1 class="display-4 text-center text-secondary">FLIGHT LIST</h1>

    <!-- Filter Button -->
    <div class="d-flex justify-content-end mb-2">
      <button class="btn btn-primary" onclick="toggleFilter()" style="border-radius: 8px;">
        <i class="fa fa-filter"></i>
      </button>
    </div>

    <!-- Filter Form -->
    <div id="filterForm" class="card p-3 mb-3" style="display: none;">
      <form method="GET" action="all_flights.php" class="row g-2">
        <div class="col-md-2">
          <input type="text" name="flight_id" class="form-control" placeholder="Flight ID" value="<?php echo $_GET['flight_id'] ?? '' ?>">
        </div>
        <div class="col-md-2">
          <input type="date" name="date" class="form-control" placeholder="Date" value="<?php echo $_GET['date'] ?? '' ?>">
        </div>
        <div class="col-md-2">
          <input type="text" name="airline" class="form-control" placeholder="Airline" value="<?php echo $_GET['airline'] ?? '' ?>">
        </div>
        <div class="col-md-2">
          <input type="text" name="source" class="form-control" placeholder="Source" value="<?php echo $_GET['source'] ?? '' ?>">
        </div>
        <div class="col-md-2">
          <input type="text" name="destination" class="form-control" placeholder="Destination" value="<?php echo $_GET['destination'] ?? '' ?>">
        </div>
        <div class="col-md-2">
          <input type="number" name="price" class="form-control" placeholder="Price" value="<?php echo $_GET['price'] ?? '' ?>">
        </div>
        <div class="col-md-12 text-end">
            <button id="sub1" type="submit" class="btn btn-success">Apply Filter</button>
        </div>
      </form>
    </div>

    <table class="table table-sm table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Arrival</th>
          <th>Departure</th>
          <th>Source</th>
          <th>Destination</th>
          <th>Airline</th>
          <th>Available Seats</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

      <?php
        $conditions = [];
        $params = [];
        $types = '';

        if (!empty($_GET['flight_id'])) {
          $conditions[] = 'flight_id = ?';
          $params[] = $_GET['flight_id'];
          $types .= 'i';
        }
        if (!empty($_GET['date'])) {
          $conditions[] = "DATE(departure) = ?";  // ✅ FIXED LINE: filter by departure date
          $params[] = $_GET['date'];
          $types .= 's';
        }
        if (!empty($_GET['airline'])) {
          $conditions[] = "airline LIKE ?";
          $params[] = $_GET['airline'];
          $types .= 's';
        }
        if (!empty($_GET['source'])) {
          $conditions[] = "source LIKE ?";
          $params[] = $_GET['source'];
          $types .= 's';
        }
        if (!empty($_GET['destination'])) {
          $conditions[] = "Destination LIKE ?";
          $params[] = $_GET['destination'];
          $types .= 's';
        }
        if (!empty($_GET['price'])) {
          $conditions[] = "price = ?";
          $params[] = $_GET['price'];
          $types .= 'i';
        }

        $sql = "SELECT * FROM Flight";
        if ($conditions) {
          $sql .= " WHERE " . implode(" AND ", $conditions);
        }
        $sql .= " ORDER BY flight_id DESC";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);

        if ($params) {
          mysqli_stmt_bind_param($stmt, $types, ...$params);
        }

        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "
            <tr class='text-center'>                  
              <td><a href='pass_list.php?flight_id=".$row['flight_id']."'>".$row['flight_id']."</a></td>
              <td>".$row['arrivale']."</td>
              <td>".$row['departure']."</td>
              <td>".$row['source']."</td>
              <td>".$row['Destination']."</td>
              <td>".$row['airline']."</td>
              <td>".$row['Seats']."</td>
              <td>₹ ".$row['Price']."</td>
              <td>
                <form action='all_flights.php' method='post'>
                  <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                  <button class='btn' type='submit' name='del_flight'>
                    <i class='text-danger fa fa-trash'></i>
                  </button>
                </form>
              </td>                  
            </tr>
          ";
        }
        mysqli_stmt_close($stmt);
      ?>

      </tbody>
    </table>
  </div>
<?php } ?>
</main>

<script>
function toggleFilter() {
  const form = document.getElementById('filterForm');
  form.style.display = form.style.display === 'none' ? 'block' : 'none';
}
</script>