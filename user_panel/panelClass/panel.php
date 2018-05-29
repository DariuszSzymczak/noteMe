<?php

class panel
{
    //Pobieranie poszczgólnych danych usera (edycja profilu)
    public function getUserData($pdo,$userID,$data)
    {
        $stmt = $pdo->prepare('SELECT email,login,md5,loginmd5,description,town,isAdmin FROM users WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }   
    }

    public function getUserAvatar($pdo,$userID)
    {
        $loginmd5 = $_SESSION['userID'];
        $login= substr($loginmd5, 0, -5); 
        $stmt = $pdo->prepare('SELECT data FROM avatars WHERE login = :login;');
        $stmt->bindParam(':login',$login,PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $a=$row['data'];
        echo '<img src="data:image/jpeg;base64,'.base64_encode($a) .'" />';

    }

    public function getUserArticles($pdo,$userID,$date)
    {
        $stmt = $pdo->prepare('SELECT topic,content,dateend FROM tasks WHERE loginmd5= :userID AND DateAdded = :today ;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->bindParam(':today',$date,PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);  
        echo($json);
    }

    public function getUserDates($pdo,$userID)
    {
        $stmt = $pdo->prepare('SELECT DateAdded FROM tasks WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($results);  
        echo($json);
    }

    //Wyswietlenie listy notatek użytkownika
    public function showUserPrivateNotes($pdo, $userID)
    {
        $stmt = $pdo->prepare('SELECT Title,DateAdded FROM privatenotes WHERE loginmd5= :userID');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        $counter = 1;
        while($rows = $stmt->fetch())
        {
            echo '<tr>';
            echo '<td>'. $counter .'</td>';

            echo "<td><a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#showPrivateNoteModal\">
                  {$rows["Title"]}</td></a>";
            echo " <td>{$rows["DateAdded"]}</td>";
            echo "<td> <center>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#editTaskModal\">
                <button type=\"button\" class=\"btn btn-warning btn-xs m-b-10 m-l-5\">
                    Edytuj</button>
            </a>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#deleteTaskConfirmModal\">
                <button type=\"button\" class=\"btn btn-danger btn-xs m-b-10 m-l-5\">
                    Usuń</button>
            </a>
        </center></td>";
        $counter++;
        }
        
    }


    //Edycja profilu usera
    public function changeUserData($pdo,$userID)
    {
        if(isset($_POST['city']))
        {
            $stmt = $pdo->prepare('UPDATE users SET town= :town WHERE loginmd5 = :userID;');
            $stmt->bindParam(':town',$_POST['city'], PDO::PARAM_STR);
            $stmt->bindParam(':userID',$userID, PDO::PARAM_STR);
            $stmt->execute();
        }
        if(isset($_POST['description']))
        {
            $stmtE = $pdo->prepare('UPDATE users SET description= :description WHERE loginmd5 = :userID;');
            $stmtE->bindParam(':description',$_POST['description'],PDO::PARAM_STR);
            $stmtE->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmtE->execute();      
        }
        if(isset($_POST['password']))
        {
            $salted = "salt{$_POST['password']}salt";
            $hash = md5($salted);
            $stmtA = $pdo->prepare('SELECT login FROM users WHERE loginmd5= :userID;');
            $stmtA->bindParam(':userID',$userID,PDO::PARAM_STR);
            while($row = $stmtA->fetch())
                {
                    $login = $row['login'];
                    $primary = $login.substr($hash,0,5);
                }  
           
            $stmtA->bindParam(':md5',$hash, PDO::PARAM_STR);
            $stmtA->bindParam(':loginmd5',$primary, PDO::PARAM_STR);
            $stmtA->execute();

        }
        else
        {
            $stmtB = $pdo->prepare('SELECT md5, login FROM users WHERE loginmd5 = :userID;');
            $stmtB->bindParam(':userID',$userID,PDO::PARAM_STR);
            $stmtB->execute();
            while($row = $stmtB->fetch())
                {
                    $stmtB->bindParam(':md5',$row['md5'], PDO::PARAM_STR);
                    $stmtB->bindParam(':loginmd5',$row['loginmd5'], PDO::PARAM_STR);
                }   
        }
        if (!empty($_FILES['avatar']))        
        {
        if(file_exists($_FILES['avatar']['tmp_name']))
        {        
            
            $imgData = file_get_contents($_FILES['avatar']['tmp_name']);
            $loginmd5 = $_SESSION['userID'];
            $login= substr($loginmd5, 0, -5); 
            $name = $_FILES['avatar']['name'];
            $type = $_FILES['avatar']['type'];

            $stmtD = $pdo->prepare('DELETE FROM avatars WHERE login = :login');
            $stmtD->bindParam(':login', $login);
            $stmtD->execute();
         
            $stmtC = $pdo->prepare('INSERT into avatars(login, name, mime, data) values(:login, :name, :type, :imgdata)');
            $stmtC->bindParam(':login', $login);
            $stmtC->bindParam(':name', $name);
            $stmtC->bindParam(':type', $type);
            $stmtC->bindValue(':imgdata', $imgData);
            $stmtC->execute();
        }
    }
    }

    public function showGroups($pdo,$userID)
    {

        $loggedUser = substr($_SESSION['userID'], 0, -5); 
        $stmt = $pdo->prepare('SELECT cg.GroupName, g.Max_count, g.UserCount, g.groupAdmin
        FROM groups g, connectgroup cg
        WHERE cg.login = :loggedUser
        AND cg.GroupName = g.GroupName
        ');
        $stmt->bindParam(':loggedUser',$loggedUser,PDO::PARAM_STR);
        $stmt->execute();
        $counter = 1;
        while($rows = $stmt->fetch())
        {
            // var_dump($rows);
            // echo"<br/>";
            echo '<tr>';
            echo '<td>'. $counter .'</td>';

            echo "<td><a href=group.php?groupName=" .$rows["GroupName"] .">{$rows["GroupName"]}</td></a>";
            echo "
            <td>"
                .$rows["UserCount"] ."/".$rows["Max_count"]
            ."</td>";
            echo "<td> <center>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"\">
                <button type=\"button\" class=\"btn btn-warning btn-xs m-b-10 m-l-5\">
                    Opuść grupę</button>
            </a>";
            if($loggedUser == $rows["groupAdmin"])
            {
           echo "<a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#deleteTaskConfirmModal\">
                <button type=\"button\" class=\"btn btn-danger btn-xs m-b-10 m-l-5\">
                Skasuj grupę</button>
            </a>";
            }
            echo "</center></td>";
        $counter++;
        }
    }
    public function addGroup($pdo, $userID)
    {
        if(isset($_POST["groupName"]) && isset($_POST["groupSize"]))
        {
            $name = $_POST["groupName"];
            $size = $_POST["groupSize"];
            $count = 1;
            $loggedUser = substr($_SESSION['userID'], 0, -5); 
            $stmt = $pdo->prepare('INSERT INTO groups(GroupName, Max_count, UserCount, groupAdmin)
                                VALUES (:name, :size, :count, :user ) ');
            $stmtB = $pdo->prepare('INSERT INTO connectgroup(login, GroupName)
            VALUES (:login, :name) ');

            $stmt->bindParam(':name', $name,PDO::PARAM_STR);
            $stmt->bindParam(':size', $size,PDO::PARAM_INT);
            $stmt->bindParam(':count', $count,PDO::PARAM_INT);
            $stmt->bindParam(':user', $loggedUser,PDO::PARAM_STR);

            $stmtB->bindParam(':name', $name,PDO::PARAM_STR);
            $stmtB->bindParam(':login', $loggedUser,PDO::PARAM_STR);

            $stmt->execute();
            $stmtB->execute();
        }
    }
    public function getGroupData($pdo, $groupName, $data)
    {
        $stmt = $pdo->prepare('SELECT GroupName, GroupDescription, Max_count, UserCount FROM groups WHERE GroupName= :groupName;');
        $stmt->bindParam(':groupName',$groupName,PDO::PARAM_STR);
        $stmt->execute();
        while($row = $stmt->fetch())
        {
            echo $row[$data];
        }  
    }

    public function showGroupUsers($pdo, $groupName)
    {
        $stmt = $pdo->prepare('SELECT cg.login, g.groupAdmin 
                               FROM groups g, connectgroup cg 
                               WHERE cg.GroupName = :groupName 
                               AND cg.GroupName = g.GroupName ');

        $stmt->bindParam(':groupName',$_GET['groupName'],PDO::PARAM_STR);
        $stmt->execute();
        $counter = 1;

            while($rows = $stmt->fetch())
            { 
            //  var_dump($rows);
            //  echo"<br/>";
            echo '<tr>';
            echo '<td>'. $counter .'</td>';
            echo "<td><a href=app-profile.php?userName=" .$rows["login"] .">" .$rows["login"] ."</a> </td>" ;
            echo "<td> <center>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#sendMessageModal".$rows["login"]. "\">
                <button type=\"button\" class=\"btn btn-info btn-xs m-b-10 m-l-5\">
                    Wiadomość</button>
            </a>
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"\">
                <button type=\"button\" class=\"btn btn-warning btn-xs m-b-10 m-l-5\">
                    Przydziel zadanie</button>
            </a>";
            if(substr($_SESSION['userID'], 0, 5) == $rows["groupAdmin"])
            echo"
            <a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"\">
            <button type=\"button\" class=\"btn btn-danger btn-xs m-b-10 m-l-5\">
                Usuń użytkownika</button>
            </a>
            </td>";
            
            if($rows["login"] == $rows["groupAdmin"])
            {
            echo "<td><span class=\"badge badge-danger\">ADMIN</span>
                    </td>
                    </tr>";
            }
            // else
            // {
            //     echo "<a href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#deleteTaskConfirmModal\">
            //             <button type=\"button\" class=\"btn btn-danger btn-xs m-b-10 m-l-5\"></button>
            //         </a>
            //         </center></td>
            //         <td>
            //             <span class=\"badge badge-danger\"></span>
            //         </td>
            //         </tr>";
            // }
            $counter++;
        }

    }

    public function existsUser($pdo, $username)
    {
        $stmt = $pdo->prepare('SELECT login FROM users ');
        $stmt->execute();
        $userFound = false;
            while($rows = $stmt->fetch())
            { 
                if($username == $rows['login'])
                {
                    $userFound = true;
                }
            }
        return $userFound;
    }

    public function existsUserInGroup($pdo, $username, $groupName)
    {
        $stmt = $pdo->prepare('SELECT login, GroupName FROM connectgroup ');
        $stmt->execute();
        $userFound = false;
            while($rows = $stmt->fetch())
            { 
                if($username == $rows['login'] && $groupName == $rows['groupName'])
                {
                    $userFound = true;
                }
            }
        return $userFound;
    }

    public function addUserToGroup($pdo, $groupName)
    {
        if(isset($_POST["username"]))
        {
            $username = $_POST["username"];
            if($this->existsUser($pdo, $username) && (!($this->existsUserInGroup($pdo, $username, $groupName))))
            {
                $stmt = $pdo->prepare('INSERT INTO connectgroup(login, GroupName)
                                    VALUES (:username, :groupName) ');

                $stmt->bindParam(':username', $username,PDO::PARAM_STR);
                $stmt->bindParam(':groupName', $groupName,PDO::PARAM_STR);

                $stmt->execute();
            }
        }
    }

    public function addPrivateNote($pdo, $username)
    {
        if(isset($_POST['title']) && isset($_POST['content']))
        {       
            
            
            $title = $_POST['title'];
            $noteContent = $_POST['content'];
            $today = date("Y-m-d");
            echo $title;
            echo $noteContent;
            echo $today;
            $stmt = $pdo->prepare('INSERT INTO privatenotes (DateAdded, Loginmd5, Title, Content)
                                   VALUES (:today, :userID, :title, :content ) ');
            $stmt->bindParam(':today', $today,PDO::PARAM_STR);
            $stmt->bindParam(':userID', $userID,PDO::PARAM_STR);
            $stmt->bindParam(':title', $title,PDO::PARAM_STR);
            $stmt->bindParam(':content', $noteContent,PDO::PARAM_STR);

           var_dump($stmt->execute());
        }
    }

    public function changeGroupData($pdo,$groupName)
    {
            if(isset($_POST['groupName']))
            {
                $stmt = $pdo->prepare('UPDATE groups SET GroupName= :name WHERE GroupName  = :oldName;');
                $stmtB = $pdo->prepare('UPDATE connectgroup SET GroupName= :name WHERE GroupName  = :oldName;'); 
                $stmt->bindParam(':name',$_POST['groupName'], PDO::PARAM_STR);
                $stmt->bindParam(':oldName',$groupName, PDO::PARAM_STR);
                $stmtB->bindParam(':name',$_POST['groupName'], PDO::PARAM_STR);
                $stmtB->bindParam(':oldName',$groupName, PDO::PARAM_STR);
                $stmt->execute();
                $stmtB->execute();
                if(isset($_POST['description']))
                {
                    $stmt = $pdo->prepare('UPDATE groups SET GroupDescription= :desc WHERE GroupName  = :name;');
                    $stmt->bindParam(':desc',$_POST['description'], PDO::PARAM_STR);
                    $stmt->bindParam(':name',$groupName, PDO::PARAM_STR);
                    $stmt->execute();
                    
                    if(isset($_POST['count']))
                    {
                        $stmt = $pdo->prepare('UPDATE groups SET Max_count= :count WHERE GroupName  = :name;');
                        $stmt->bindParam(':count',$_POST['count'], PDO::PARAM_STR);
                        $stmt->bindParam(':name',$groupName, PDO::PARAM_STR);
                        $stmt->execute();
                    }
                }

                
            }

            
        
    }
    
    // public function deleteGroup($pdo, $groupID)
    // {

    // }

    //DODAWANIE ZADAŃ

    public function addTask($pdo,$userID)
    {
        if(isset ($_POST['topic']))
        {
        $stmt = $pdo->prepare('SELECT email,login,md5,loginmd5,description,town FROM users WHERE loginmd5= :userID;');
        $stmt->bindParam(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(); 
        $stmt -> closeCursor();

        $status = 0;
        $date = date("d-m-y");
        $insertSTMT = $pdo->prepare('INSERT into tasks(topic, content, loginmd5, DateAdded, dateend, author, status1) 
                            values(:topic, :content, :loginmd5, :DateAdded, :dateend, :author, :status1)');
        $insertSTMT->bindParam(':topic', $_POST['topic']);
        $insertSTMT->bindParam(':content', $_POST['content']);
        $insertSTMT->bindParam(':loginmd5', $userID);
        $insertSTMT->bindParam(':DateAdded', $date);
        $insertSTMT->bindParam(':dateend', $_POST['dateend']);
        $insertSTMT->bindParam(':author', $row['login']);
        $insertSTMT->bindParam(':status1', $status);
        $insertSTMT->execute();
        }
    }

}
?>
