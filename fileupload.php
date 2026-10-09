    <?php
    if (isset($_POST['upload'])) {

        $fileName = basename($_FILES['myfile']['name']);
        $tempName = $_FILES['myfile']['tmp_name'];

        $folder = "uploads/";

        if (!is_dir($folder)) {
            mkdir($folder, 0755, true);
        }

        if (move_uploaded_file($tempName, $folder . $fileName)) {
            echo "File uploaded successfully!";
        } else {
            echo "File upload failed!";
        }
    }
    ?>