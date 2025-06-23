<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<style>
/* Add your custom styles if needed */
</style>

<main>
<?php 
if (isset($_SESSION['userId'])) {
    require 'helpers/init_conn_db.php';

    if (isset($_POST['cancel_but'])) {
        $ticket_id = $_POST['ticket_id'];
        $stmt = mysqli_stmt_init($conn);
        $sql = 'SELECT * FROM Ticket WHERE ticket_id=?';

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ticket.php?error=sqlerror');
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $ticket_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $sql_pas = 'DELETE FROM Passenger_profile WHERE passenger_id=?';
                $stmt_pas = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt_pas, $sql_pas)) {
                    mysqli_stmt_bind_param($stmt_pas, 'i', $row['passenger_id']);
                    mysqli_stmt_execute($stmt_pas);
                }

                $sql_t = 'DELETE FROM Ticket WHERE ticket_id=?';
                $stmt_t = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt_t, $sql_t)) {
                    mysqli_stmt_bind_param($stmt_t, 'i', $row['ticket_id']);
                    mysqli_stmt_execute($stmt_t);
                }
            }
        }
    }
?>

<div class="container mb-5">
    <h1 class="text-center mt-4 mb-4">E-TICKETS</h1>

<?php 
    $sql = 'SELECT * FROM Ticket WHERE user_id=?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ticket.php?error=sqlerror');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $_SESSION['userId']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($ticket = mysqli_fetch_assoc($result)) {
            // Fetch passenger
            $sql_p = 'SELECT * FROM Passenger_profile WHERE passenger_id=?';
            $stmt_p = mysqli_stmt_init($conn);
            $passenger = null;
            if (mysqli_stmt_prepare($stmt_p, $sql_p)) {
                mysqli_stmt_bind_param($stmt_p, 'i', $ticket['passenger_id']);
                mysqli_stmt_execute($stmt_p);
                $result_p = mysqli_stmt_get_result($stmt_p);
                $passenger = mysqli_fetch_assoc($result_p);
            }

            // Fetch flight
            $sql_f = 'SELECT * FROM Flight WHERE flight_id=?';
            $stmt_f = mysqli_stmt_init($conn);
            $flight = null;
            if (mysqli_stmt_prepare($stmt_f, $sql_f)) {
                mysqli_stmt_bind_param($stmt_f, 'i', $ticket['flight_id']);
                mysqli_stmt_execute($stmt_f);
                $result_f = mysqli_stmt_get_result($stmt_f);
                $flight = mysqli_fetch_assoc($result_f);
            }

            // Skip tickets with missing data
            if (!$passenger || !$flight) {
                continue;
            }

            echo '<div class="row mb-5">';
            $date_dep = substr($flight['departure'], 0, 10);
            $time_dep = substr($flight['departure'], 10, 6);
            $date_arr = substr($flight['arrivale'], 0, 10);
            $time_arr = substr($flight['arrivale'], 10, 6);
            $class_txt = $ticket['class'] === 'E' ? 'ECONOMY' : 'BUSINESS';

            // Calculate board time (3 hours before departure)
            $departure_datetime = new DateTime($flight['departure']);
            $departure_datetime->sub(new DateInterval('PT3H'));
            $board_time = $departure_datetime->format('H:i');

            echo '
            <div class="col-8 out">
                <div class="row">
                    <div class="col"><h2 class="text-secondary mb-0 brand">Online Flight Booking</h2></div>
                    <div class="col"><h2 class="mb-0">'.$class_txt.' CLASS</h2></div>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col-4"><p class="head">Airline</p><p class="txt">'.$flight['airline'].'</p></div>
                    <div class="col-4"><p class="head">From</p><p class="txt">'.$flight['source'].'</p></div>
                    <div class="col-4"><p class="head">To</p><p class="txt">'.$flight['Destination'].'</p></div>
                </div>
                <div class="row mb-3">
                    <div class="col-8">
                        <p class="head">Passenger</p>
                        <p class="h5 text-uppercase">'.htmlspecialchars($passenger['f_name'].' '.$passenger['m_name'].' '.$passenger['l_name']).'</p>
                    </div>
                    <div class="col-4"><p class="head">Board Time</p><p class="txt">'.$board_time.'</p></div>
                </div>
                <div class="row">
                    <div class="col-3"><p class="head">Departure</p><p class="txt mb-1">'.$date_dep.'</p><p class="h1">'.$time_dep.'</p></div>
                    <div class="col-3"><p class="head">Arrival</p><p class="txt mb-1">'.$date_arr.'</p><p class="h1">'.$time_arr.'</p></div>
                    <div class="col-3"><p class="head">Gate</p><p class="txt">A22</p></div>
                    <div class="col-3"><p class="head">Seat</p><p class="txt">'.$ticket['seat_no'].'</p></div>
                </div>
            </div>

            <div class="col-3 pl-0" style="background-color:#376b8d !important;
                padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                <div class="row"><div class="col"><h2 class="text-light text-center brand">QuickFlights</h2></div></div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="assets/images/plane-logo.png" class="mx-auto d-block" height="200px" width="200px" alt="">
                    </div>
                </div>
            </div>

            <div class="col-1">
                <div class="dropdown">
                    <a class="text-reset text-decoration-none" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu">
                        <form class="px-4 py-3" action="ticket.php" method="post">
                            <input type="hidden" name="ticket_id" value="'.$ticket['ticket_id'].'">
                            <button class="btn btn-danger btn-sm" name="cancel_but"><i class="fa fa-trash"></i> &nbsp; Cancel Ticket</button>
                        </form>

                        <form class="px-4 py-3" action="e_ticket.php" target="_blank" method="post">
                            <input type="hidden" name="ticket_id" value="'.$ticket['ticket_id'].'">
                            <button class="btn w-100 mb-3 btn-primary btn-sm" name="print_but"><i class="fa fa-print"></i> &nbsp; Print Ticket</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}
?>
</div>
</main>
<?php subview('footer.php'); ?>
