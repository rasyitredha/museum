
                <?php
                $file = fopen("booking_data.txt", "r");
                if ($file) {
                    while (($line = fgets($file)) !== false) {
                        echo nl2br($line);
                    }
                    fclose($file);
                } else {
                    echo "Gagal membuka file booking_data.txt";
                }
                ?>
  