<?php
/**
 * pacesetter events page
 *
 *
 * @package pacesetter
 */

/**
 */

 get_header();

?>

<div class="event-section">
    <div class="event-header">
        <?php echo "<h1>" . date("M") . " - Events</h1>"; ?>
        <form action="" method="POST">
            <select id="calender-select" name="calendar-select">
                <option value="calendar" <?php if ($_POST['calendar-select'] === 'calendar') echo "checked"; ?>>View Calendar</option>
                <option value="event-card" <?php if ($_POST['calendar-select'] === 'event-card') echo "checked"; ?>>View Events</option>
            </select>
            <input type="submit" value="Set">
        </form>
    </div>
    <div class="event-card">
    <?php 
    
        if (isset($_POST['calendar-select'])) {
            switch($_POST['calendar-select']) {
                case 'calendar':
                    echo "Calendar";
                break;

                case 'event-card':
                    echo "event-card";
                break;
            }

        } else {
            echo "NULL";
        }

    ?>
    </div>
</div>

<?php get_footer() ?>