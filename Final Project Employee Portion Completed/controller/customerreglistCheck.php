<?php

           $myfile=fopen('../model/customerreglist.txt','r');

            while(!feof($myfile))
            {
                $line=fgets($myfile);
                $myuser=explode('|', $line);//for multiple user

                $requestid=trim($myuser[0]);
                $accounttype=trim($myuser[1]);
                $username=trim($myuser[2]);

                /*setcookie('flag','true',time()+3600,'/');*/
                header('location: ../views/customerreglist.php?requestid='.$requestid.'&accounttype='.$accounttype.'&username='.$username);

            }


             
            
?>