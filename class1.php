<?php
class Structure{
        private $con = array("localhost","root","","survey_pel");
        public function __construct()
        {
            $this->conn = mysqli_connect($this->con[0],$this->con[1],$this->con[2],$this->con[3]);
            session_start();
        }
    public function login($username,$password)
    {
        $msqli = "SELECT * FROM adminn WHERE user='$username' AND pass='$password'";
        $data = mysqli_query($this->conn,$msqli);
        $cek = mysqli_num_rows($data);
            if ($cek==1) {
                return true;
            }
            else{
                return false;
            }
    }
    public function label()
    {
        $label  = mysqli_query($this->conn, "SELECT label FROM diagram order by ID asc");
        return $label;
    }
    public function jumlah()
    {
        $jumlah = mysqli_query($this->conn,"SELECT jumlah FROM diagram order by ID asc");
        return $jumlah;
    }
    public function add_komen($komen)
    {
        $sql = "INSERT INTO `komenan`  VALUES (NULL, '$komen')";
        $add = mysqli_query($this->conn,$sql);
        return $add;
    }
    public function list_komen()
    {
        $sql = "SELECT * FROM `komenan`";
        $sh = mysqli_query($this->conn,$sql);
        return $sh;
    }
    public function sh_puas()
    {
        $sql = "SELECT * FROM `diagram` WHERE id=1";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function vote_puas($vote)
    {
        $sqli = "UPDATE `diagram` SET `jumlah` = '$vote' WHERE `diagram`.`id` = 1";
        $upd = mysqli_query($this->conn,$sqli);
        return $upd;
    }
    public function sh_tdkpuas()
    {
        $sql = "SELECT * FROM `diagram` WHERE id=2";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function vote_tdkpuas($vote)
    {
        $sqli = "UPDATE `diagram` SET `jumlah` = '$vote' WHERE `diagram`.`id` = 2";
        $upd = mysqli_query($this->conn,$sqli);
        return $upd;
    }
}
?>