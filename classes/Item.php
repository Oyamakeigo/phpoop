<?php

require_once "Config.php";

class Item extends Config{
    public function selectAll(){

        $sql = "SELECT * FROM items INNER JOIN categories ON items.category_id=categories.category_id";

        $result = $this->conn->query($sql);

        $rows = array();
        if($result->num_rows > 0){
            while ($row = $result ->fetch_assoc()){
                 $rows[]=$row;
            }
            return $rows;
        } else{
            return false;
        }
    }
    public function selectOne($id){
        $sql ="SELECT * FROM items WHERE item_id=$id";
        $result =$this->conn->query($sql);

        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
        echo "Error:" . $this->conn->error;
    }
}
    public function save($category_id,$itemname,$itemdescription,$itemprice){

        $sql ="INSERT INTO items(category_id,item_name,item_description,item_price)
               VALUES('$category_id','$itemname','$itemdescription','$itemprice')";
        $result =$this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }
    }
    public function update($id,$itemname,$itemdescription,$itemprice){
        $sql ="UPDATE items SET itemname='$itemname' ,itemdecription='$itemdescription',itemprice='$itemprice' WHERE item_id=$id";
        $result =$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:" .$this->conn->error;
        }

    }
    public function delete($id){
        $sql ="DELETE FROM items WHERE item_id=$id";

        $result=$this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo "Error:".$this->conn->error;
        }
    }
}

?>