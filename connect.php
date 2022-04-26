<?php
    $firstname = filter_input(INPUT_POST, 'firstname');
    $middlename = filter_input(INPUT_POST, 'middlename');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $address = filter_input(INPUT_POST, 'address');
    $age = filter_input(INPUT_POST, 'age');
    $gender = filter_input(INPUT_POST, 'gender');
    $phoneno = filter_input(INPUT_POST, 'phoneno');
    $income = filter_input(INPUT_POST, 'income');
    $document = filter_input(INPUT_POST, 'document');
    $documentno = filter_input(INPUT_POST, 'documentno');
    if (!empty($firstname))
    {
        if (!empty($middlename))
        {
            if(!empty($lastname))
            {
                if(!empty($address))
                {
                    if(!empty($age))
                    {
                        if(!empty($gender))
                        {
                            if(!empty($phoneno))
                            {
                                if(!empty($income))
                                {
                                    if(!empty($document))
                                    {
                                        if(!empty($documentno))
                                        {
                                            $host ="localhost";
                                            $dbusername ="root";
                                            $dbpassword = "";
                                            $dbname ="form";
                                            $con = mysqli_connect($host,$dbusername,$dbpassword,$dbname);


                                            if (mysqli_connect_error())
                                            {
                                                die('connect error ('.mysqli_connect_errno().') '. mysqli_connect_error());
                                            }


                                            else 
                                            {
                                                $sql = " INSERT INTO  eligibility (firstname ,middlename ,lastname ,address ,age ,gender ,phoneno ,income ,document ,documentno)
                                                values ('$firstname','$middlename','$lastname','$address','$age','$gender','$phoneno','$income','$document','$documentno')";

                                                echo $sql;
                                                if ($con->query($sql))
                                                {
                                                    echo "New record is inserted succesfully";
                                                }
                                                else
                                                {
                                                    echo "Error:".$sql."<br>".$con->error;
                                                }

                                               $con->close();
                                            }
                                        }
                                        else
                                        {
                                            echo "documentno should not be empty";
                                            die();
                                        }
                                    }
                                    else
                                    {
                                        echo "document should not be empty";
                                        die();
                                    }
                                }
                                else
                                {
                                    echo "income should not be empty";
                                    die();
                                }
                            }
                            else
                            {
                                echo "phonenumber should not be empty";
                                die();
                            }
                        }
                        else
                        {
                            echo "gender should not be empty";
                            die();
                        }
                    }
                    else
                    {
                        echo "age should not be empty";
                        die();
                    }
                }
                else
                {
                    echo "address should not be empty";
                    die();
                }
            }
            else
            {
                echo "lastname should not be empty";
                die();
            }
        }
        else
        {
            echo "middlename should not be empty";
            die();
        }
    }
    else
    {
        echo "firstname should not be empty";
        die();
    }
?>