        <?php // hier open ik de php tag//
        for ($i = 33; $i <= 543; $i++) { // hier wordt de blok 512 keer herhaald, de $i word steeds verhoogd.
            echo "<li>"; // verstuurt de li item.

            if ($i % 5 == 0 && $i % 9 == 0) { // hier wordt $i gecontroleerd of het deelbaar is door 5 of 9.
                echo "<strong>Web</strong>"; // hier wordt Web dikgedrukt.
            } elseif ($i % 5 == 0) {
                echo "<strong>Software</strong>";
            } elseif ($i % 9 == 0) {
                echo "<strong>Developer</strong>";
            } else {
                echo "<strong>$i</strong>";
            }

            echo "</li>";
        }
        ?>
