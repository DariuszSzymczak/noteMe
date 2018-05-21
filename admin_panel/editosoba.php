<?php 
    class editosoba {

        public function delete_user($pdo,$login){
            $querryDelete = $pdo->prepare("DELETE FROM users where login=:login");
            $querryDelete->bindParam(':login',$login, PDO::PARAM_STR);
            $querryDelete->execute();
                echo "<script type='text/javascript'>
                        alert('Usunięto użytkownika ",$login, " ');
                        location='index_admin.php';
                    </script>"    
        }
        public function add_task($pdo,$login,$task,$expiry_date,$autor,$topic){
            
            $q = $pdo->querry("SELECT loginmd5 FROM users where login='$login'");
            $f = $q->fetch();
            $loginmd5 = $f['loginmd5'];

            $querryAddTask = $pdo->prepare('INSERT INTO task(topic,content,loginmd5,DateAdded,dateend,author,status 
                                            values(:temat,:zadanie,:login,:data_star,:data_zakonczeniat,:autor,0)');
            $querryAddTask->bindParam(':login',$loginmd5, PDO::PARAM_STR);
            $querryAddTask->bindParam(':zadanie',$task, PDO::PARAM_STR);
            $querryAddTask->bindParam(':temat',$topic, PDO::PARAM_STR);
            $querryAddTask->bindParam(':data_start',date('d-m-Y'), PDO::PARAM_STR);
            $querryAddTask->bindParam(':data_zakonczenia',$expiry_date, PDO::PARAM_STR);
            $querryAddTask->bindParam(':autor',$autor, PDO::PARAM_STR);
            $querryAddTask->execute();
        }
        public function change_pass($pdo,$login,$pass1,$pass2){
            if ($pass1 == $pass2){
                $salted = "salt{$password}salt";
                $hash = md5($salted);
                $querryChangePass = $pdo ->prepare('UPDATE `users` SET md5=:hash WHERE login =:login');
                $querryChangePass->bindParam(':login',$login, PDO::PARAM_STR);
                $querryChangePass->bindParam(':hash',$hash, PDO::PARAM_STR);
                $querryChangePass->execute();
            }
        }
    }
?>