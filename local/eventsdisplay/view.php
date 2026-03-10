<?php
// Standard Moodle page bootstrap.
require(__DIR__ . '/../../config.php');  // Loads Moodle's core

// Require login (optional: remove if public access wanted).
require_login();

// Set up the page context (system-wide, like site home).
$context = context_system::instance();
$PAGE->set_context($context);
$PAGE->set_url('/local/eventsdisplay/view.php');
$PAGE->set_title(get_string('page_title', 'local_eventsdisplay'));  // From lang file
$PAGE->set_heading(get_string('pluginname', 'local_eventsdisplay'));
$PAGE->set_pagelayout('standard');  // Responsive layout matching your theme

echo $OUTPUT->header();  // Outputs Moodle header (navbar, etc.)

// ─────────────────────────────────────────────────────────
// YOUR DYNAMIC EVENTS CODE GOES HERE (full block from before)
// Paste the entire <div class="container"> ... </div> including the <?php events fetch ?>
// ─────────────────────────────────────────────────────────
?>
<div class="container">
    <h6>ALL ABOUT EVENTS UPDATES</h6>
    <h2>Upcoming Events</h2>
    
    <?php
    // Fetch upcoming events (site-wide, from now onward).
    // Params: $timestart (from now), $courseid (0=site), $userid (0=all users), ignore filters.
    global $CFG, $PAGE;
    require_once($CFG->libdir . '/gradelib.php'); // If needed for any calcs, but optional.
    
    $timestart = time(); // Start from now.
    $maxevents = 10; // Limit to prevent too many; set to 999 for "all".
    $events = calendar_get_legacy_events($timestart, null, null, true, true); // true = include duration.
    
    // Sort by start time (just in case) and slice to limit.
    usort($events, function($a, $b) {
        return $a->timestart - $b->timestart;
    });
    $events = array_slice($events, 0, $maxevents);
    
    if (!empty($events)) {
        echo '<div class="row">';
        foreach ($events as $event) {
            // Format date: e.g., day=31, then "Dec 2017".
            $event_day = date('d', $event->timestart);
            $event_monthyear = date('M Y', $event->timestart);
            
            // Event link (to Moodle's event view page).
            $event_url = $CFG->wwwroot . '/calendar/event.php?id=' . $event->id;
            
            // Venue (from event location, fallback to 'Online').
            $venue = !empty($event->location) ? $event->location : 'Online';
            
            // Summary: Shorten description (first 100 chars).
            $summary = format_text($event->description, $event->descriptionformat);
            $summary = strip_tags($summary);
            $summary = strlen($summary) > 100 ? substr($summary, 0, 100) . '...' : $summary;
            
            // Map link (Google Maps search based on venue).
            $map_url = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($venue);
            
            // Price: Not standard in Moodle—hardcode or use custom field (e.g., if you add one via plugins).
            // For now, default to '$99' or make it dynamic if you have a custom event field.
            $price = '$99'; // TODO: Fetch from custom field if set up.
            
            // Image: Use your static default for now. To make dynamic, upload images to event attachments or use a custom field.
            $image_src = $CFG->wwwroot . '/theme/image.php/klassroom/theme/1770706767/events/01'; // Your static path.
            
            // Output the event box.
            echo '
            <div class="col-lg-6 col-md-6 col-sm-12 box">
                <div class="pull-left customimage">
                    <a href="' . $event_url . '">
                        <img src="' . $image_src . '" alt="' . htmlspecialchars($event->name) . '">
                        <span class="event-date">
                            <span class="day">' . $event_day . '</span> ' . $event_monthyear . '
                        </span>
                    </a>
                </div>
                <div class="pull-left content">
                    <h3><a href="' . $event_url . '">' . htmlspecialchars($event->name) . '</a></h3>
                    <div class="event-venue">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i> ' . htmlspecialchars($venue) . '
                    </div>
                    <div class="event-summary">
                        <p>' . $summary . '</p>
                    </div>
                    <div class="event-metas">
                        <a class="event-map" href="' . $map_url . '" target="_blank">
                            <i class="fa fa-map" aria-hidden="true"></i> View Map
                        </a>
                        <span class="event-price">
                            <i class="fa fa-buysellads" aria-hidden="true"></i> ' . $price . '
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>';
        }
        echo '</div>'; // Close the row.
    } else {
        echo '<p>No upcoming events found.</p>';
    }
    ?>
    
    <a class="btn" href="<?php echo $CFG->wwwroot; ?>/calendar/view.php">View All Events <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    <div class="clearfix"></div>
</div>
<?php
echo $OUTPUT->footer();  // Outputs Moodle footer
