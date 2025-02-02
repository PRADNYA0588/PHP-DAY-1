<html>
    <body>
        <?php
        //File Handling Operation

        //Create a New File
        $file = fopen("Student.txt","w");
        //fclose($file);
        echo "File has been created";

        //Write in a New File
        fwrite($file, "Hello Student File !! \n This is Test File");
        echo "<br> Text has been Inserted";
        fclose($file);

        //Read a file
        echo "<br>";
        $file_read = fopen("Student.txt" ,"r");
        while(!feop($file_read)){
            echo fgets($file_read)."<br>";
        }
        fclose($file_read);

        //Deleting a File
        if(file_exists("Student.text")){
            unlink("Student.txt");
            echo"<br><br> File has been deleted !!";
        }
        else{
            echo "<br><br>File not Found";
        }
        ?>
    </body>
</html>
