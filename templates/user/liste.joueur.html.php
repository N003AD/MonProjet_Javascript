
                        <table class="TablelisteUser">
                            <tr>
                                <td>Nom</td>
                                <td>Prénom</td>
                                <td>Score</td>
                            </tr>
                            <?php
                            if(isset($_SESSION['users'])){
                                // echo "user";die;
                                $users = $_SESSION['users'];
                                // var_dump($users);die;
                                $nbPages = count($users) / 7;
                                if(count($users) % 7 != 0){
                                    $nbPages++;
                                }
                                if(isset($_GET['page'])){
                                    $pp = $_GET['page'];
                                    // $id = $_GET['id'];
                                    $id = ($pp-1)*7;
                                    $p = $pp*7;
                                }else{
                                    $p =7;
                                    $id = 0;
                                }
                                while($id <$p && ($id < count($users))){
                                    if($users[$id]['role'] =="ROLE_JOUEUR"){
                                        echo "<tr>";
                                            echo "<td>".$users[$id]['nom']."</td>";
                                            echo "<td>".$users[$id]['prenom']."</td>";
                                            echo "<td>".$users[$id]['score']."</td>";
                                        echo "</tr>";
                                    }
                                    $id++;
                                }
                                unset($_SESSION['users']);
                            }
                                
                            ?>
                        </table>
                        <div class="divPagination">
                            <?php
                                for($i=1;$i<=$nbPages; $i++){
                                    
                                    echo "<a class href=".WEB_FRONT."?controller=user&action=getUsers&id&page=".$i.">".$i."</a>";
                                }
                            ?>
                        </div>
                        