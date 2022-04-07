<?PHP
    public class User{
        public $id
        public $username
        public $email
        public $nama
        public $password
        public $satus
        public $telepon
        public $hak_akses
        
        public function setid($input){
            $this->id = $input;
        }
        public function setusername($input){
            $this->username = $input;
        }
        public function setemail($input){
            $this->email = $input;
        }
        public function setnama($input){
            $this->nama = $input;
        }
        public function setpassword($input){
            $this->password= $input;
        }
        public function setsatus($input){
            $this->satus = $input;
        }
        public function settelepon($input){
            $this->telepon = $input;
        }

        public function getid(){ 
            return $this->id;
        }
        public function getusername(){ 
            return $this->username;
        }
        public function getemail(){ 
            return $this->email;
        }
        public function getnama(){ 
            return $this->nama;
        }
        public function getpassword(){ 
            return $this->password;
        }
        public function getsatus(){ 
            return $this->satus;
        }
        public function gettelepon(){ 
            return $this->telepon;
        }
        public function enditProfile(){
            session_start();
            include "Connection.php";
            if(isset($_POST['edit'])){
                $id=$_SESSION['id'];
                $username=$_POST['username'];
                $nama=$_POST['nama'];
                $email=$_POST['email'];
                $satus=$_POST['satus'];
                $telepon=$_POST['telepon'];
                $select= "select * from users where id='$id'";
                $sql = mysqli_query($conn,$select);
                $row = mysqli_fetch_assoc($sql);
                $res= $row['id'];
                if($res === $id)
                {
                $update = "update users set username='$username',email='$email',nama='$nama',satus='$satus',telepon='$telepon',username='$username' where id='$id'";
                $sql2=mysqli_query($conn,$update);
                }
            }
        }
        public function searchObat(){
            $query = "SELECT * FROM houses WHERE postcode like '%$term%'";
                $result = $this->mysqli->query($query);
                $num_result = $result->num_rows;    
                if($num_result > 0){
                    while($rows =$result->fetch_assoc()){               
                        $this->data[]=$rows;
                    }           
                    return $this->data;
                } 
            } else {
                echo 'No Records Found';    
            }
        }
        public function ubahPassword(){
            session_start();
            include "Connection.php";
            if(isset($_POST['edit'])){
                $id=$_SESSION['id'];
                $password=$_SESSION['password'];
                $select= "select * from users where id='$id'";
                $sql = mysqli_query($conn,$select);
                $row = mysqli_fetch_assoc($sql);
                $res= $row['id'];
                if($res === $id)
                {
                $update = "update users set password='$password' where id='$id'";
                $sql2=mysqli_query($conn,$update);
                }
            }
        }

        public function setJenisUser($input){
            $this->hak_akses = $input;
        }
    }
?>