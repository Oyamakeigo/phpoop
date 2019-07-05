<?php
                            require_once "classes/CarDistance.php";

                            $calculate = new CarDistance;

                           if(isset($_POST['calculate'])){

                            $gas = $_POST['gas'];
                            $distance = $_POST['distance'];
                            
                            $calculate->calculate($gas, $distance);
                                 
                            }

                            ?>