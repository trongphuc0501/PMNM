<?php 
class Products extends Db{
    function all(){
        return $this->select("select * from product");
    }
    function productHot(){
        return $this->select("select * from product where product_hot=1");
    }
    function productType($key){
        return $this->select("select * from product where product_type=?", [$key]);
    }
    function search($keySearch){
        //echo "keysearch = ",$keySearch;exit;
        return $this->select("select * from product where product_name like ?", ["%$keySearch%"]);
      }
    function getById($id){
        return $this->select("select * from product where id=? ", [$id]);
    }
    function delete($id){
        return $this->updateTable("delete from product where id=?", [$id]);
    }

}