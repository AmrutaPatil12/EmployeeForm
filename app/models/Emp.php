<?php
class Emp extends Database
{
    public function insert($postData,$target_file)
    {
       
        $fname=$postData['firstname'];
        $lname=$postData['lastname'];
        $email=$postData['email'];
        $phoneno=$postData['phoneno'];
        $street=$postData['street'];
        $city=$postData['city'];
        $state=$postData['state'];
        $country=$postData['country'];
        $pincode=$postData['pincode'];
        // $photo=$postData['photo'];
        $photo=$target_file;
        $id=$postData['id'];

        $this->query("insert into employeeinfo(firstname,lastname,email,phoneno,street,city,state,country,pincode,photo,id)values('$fname','$lname','$email','$phoneno','$street','$city','$state','$country','$pincode','$photo','$id')");
        $this->execute();
        // echo "insert successfully";
        
 
    }
   
    public function display1()
 
    {
        $this-> query("select * from employeeinfo");
        return $this->resultSet();
    }

    public function del($id)
    {
        // $id=$_POST['del'];
        $this->query("DELETE FROM employeeinfo where id='$id'");

       return $this->execute();
        // echo "delete row succesfully";
    }

    public function disp()
    {
      $fname=$_POST['search'];
      $id=$_POST['search'];
      $this->query("SELECT * FROM employeeinfo where firstname='$fname' OR id='$id'");
      return $this->resultSet();
    }
   
    // public function delete($id)
    // {
    //        $this->query("SELECT * FROM employeeinfo where id=$id");
    //        return $this->single();
    // }
    public function empp($id)
    {
        $this->query("SELECT * FROM employeeinfo where id=$id");
        return $this->single();
    }

    
    public function modeleditsave($data,$target_file)
        {
         
            
            $firstname=($data[0]);
            $lastname=($data[1]);
            $email=($data[2]);
            $Phoneno=($data[3]);
            $street=($data[4]);
            $city=($data[5]);
            $state=($data[6]);
            $country=($data[7]);
            $pincode=($data[8]);
            $photo=$target_file;
            $id=($data[10]);
            $this->query("UPDATE employeeinfo SET firstname ='$firstname',lastname ='$lastname',email ='$email',phoneno ='$Phoneno',street='$street',city ='$city',state ='$state',country ='$country',pincode ='$pincode',photo='$photo' WHERE firstname = '$firstname'");
            $this->execute();
                    
            // echo "Data Updated";
          }
}

    
