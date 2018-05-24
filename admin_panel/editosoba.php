<?php 
    class editosoba {

        public function delete_user($pdo,$login){
            $querryDelete = $pdo->prepare("DELETE FROM users where login=:login");
            $querryDelete->bindParam(':login',$login, PDO::PARAM_STR);
            $querryDelete->execute();
                echo "<script type='text/javascript'>
                        alert('Usunięto użytkownika ",$login, " ');
                        location='index_admin.php';
                    </script>";    
        }
        public function add_task($pdo,$login,$task,$expiry_date,$autor,$topic){
            
            $q = $pdo->prepare("SELECT loginmd5 FROM users where login=:login");
            $q->bindparam(':login',$login, PDO::PARAM_STR);
            $q->execute();
            $f = $q->fetch();
            $loginmd5 = $f['loginmd5'];

            $start = date('Y-m-d');
            
            $querryAddTask = $pdo->prepare('INSERT INTO tasks (topic,content,loginmd5,DateAdded,dateend,author,status) 
                                             values(:temat,:zadanie,:login,:data_start,:data_zakonczenia,:autor,0)');
            $querryAddTask->bindParam(':login',$loginmd5, PDO::PARAM_STR);
            $querryAddTask->bindParam(':zadanie',$task, PDO::PARAM_STR);
            $querryAddTask->bindParam(':temat',$topic, PDO::PARAM_STR);
            $querryAddTask->bindParam(':data_start',$start, PDO::PARAM_STR);
            $querryAddTask->bindParam(':data_zakonczenia',$expiry_date, PDO::PARAM_STR);
            $querryAddTask->bindParam(':autor',$autor, PDO::PARAM_STR);
            $querryAddTask->execute();
            echo "<script type='text/javascript'>
                        alert('Pomyślnie dodano zadanie dla użytkownika ",$login, " ');
                        location='index_admin.php';
                    </script>";   
        }
        public function change_pass($pdo,$login,$pass1,$pass2){
            if ($pass1 == $pass2){
                try{
                    $salted = "salt{$pass1}salt";
                    $hash = md5($salted);
                    $primary = $login.substr($hash,0,5);
                    $querryChangePass = $pdo->prepare('UPDATE users SET md5=:hash,loginmd5=:primary WHERE login =:login');
                    $querryChangePass->bindParam(':login',$login, PDO::PARAM_STR);
                    $querryChangePass->bindParam(':primary',$primary, PDO::PARAM_STR);
                    $querryChangePass->bindParam(':hash',$hash, PDO::PARAM_STR);
                    $querryChangePass->execute();
                    echo "<script type='text/javascript'>
                        alert('Hasło użytkownika ",$login, " zostało zmienione ');
                        location='index_admin.php';
                         </script>";
                } catch (PDOException $e){
                    echo $sql . "<br>" . $e->getMessage();
                }
            }
        }
        public function change_to_admin($pdo,$login){
            try {
                $querryChangeToAdmin = $pdo->prepare('UPDATE users SET isAdmin=1 WHERE login =:login');
                $querryChangeToAdmin->bindParam(':login',$login, PDO::PARAM_STR);
                $querryChangeToAdmin->execute();
                echo "<script type='text/javascript'>
                alert('Użytkownik ",$login, " został adminem');
                location='index_admin.php';
                 </script>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
        }
        }
        public function show_all(){
            $querryShow = $pdo->prepare("SELECT login, email,town,isAdmin from users");
            $querryShow->execute();
            $results = $querryShow->fetchall(PDO::FETCH_ASSOC);
            $json = json_encode($results);
            echo($json);
        }
    }
?>