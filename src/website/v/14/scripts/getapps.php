<?php
                        $id = $_SESSION['id'];
                        $user = $_SESSION['username'];

                        $find_apps = "SELECT permissions FROM userinfo WHERE username = '$user' AND id = '$id'";

                        $take_apps = $conn->query($find_apps);

                        if($take_apps->num_rows == 1) {
                            while($row = $take_apps->fetch_object()) {
                                $apps = $row->permissions;
                            }
                        }
                        if($apps === "default"){
                            ?><ul>
                            <li><a href="/projects/secretsitecode/">SecretSiteCode Playground</a></li><li><a href="/projects/chat/">ThinkChat</a></li></ul>
                            <?php
                        }
                        if($apps === "dgaw" || $apps === "DGAW" || $apps === "nindo" || $apps === "geheimagent") {
                            ?><p class="error">Dit type account wordt niet meer ondersteund. Je kunt de beheerder van geheimesite.nl (Robin Boers) emailen.</p><ul>
                            <li><a href="/projects/secretsitecode/">SecretSiteCode Playground</a></li><li><a href="/projects/chat/">ThinkChat</a></li></ul>
                            <?php
                        }
                        if($apps === "dagboek_f") {
                            $_SESSION['f_name'] = $user;
                            $_SESSION['f_password'] = true;
                            ?>
                            <p>
                                <ul>
                                    <li><a href="/projects/dagboek/fabian/">Mijn dagboek</a></li>
                                    <li><a href="/projects/secretsitecode/">SecretSiteCode Playground</a></li>
                                    <li><a href="/projects/chat/">ThinkChat</a></li>
                                </ul>
                            <?php
                        }
                        if($apps === "dagboek_i") {
                            $_SESSION['i_name'] = $user;
                            $_SESSION['i_password'] = true;
                            ?>
                            <ul>
                                <li><a href="/projects/dagboek/iris/">Mijn dagboek</a></li>
                                <li><a href="/projects/secretsitecode/">SecretSiteCode Playground</a></li>
                                <li><a href="/projects/chat/">ThinkChat</a></li>
                            </ul>
                            <?php
                        }
                        else if($apps === "admin") {
                            $_SESSION['f_name'] = "Admin";
                            $_SESSION['f_password'] = true;
                            $_SESSION['i_name'] = "Admin"; 
                            $_SESSION['i_password'] = true;
                            ?>
                            <ul class="admin">
                                <li>
                                    <a href="/projects/dagboek/fabian/">
                                        Mijn dagboek (Fabian)
                                    </a>
                                </li>
                                <li>
                                    <a href="/projects/dagboek/iris/">
                                        Mijn dagboek (Iris)
                                    </a>
                                </li>
                                <li>
                                    <a href="/projects/secretsitecode/">
                                        SecretSiteCode Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="/projects/chat/">ThinkChat</a>
                                </li>
                            </ul>
                            <?php
                        }
                    ?>