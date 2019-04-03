<?php
//include the file of database
include 'include/header.php';
include 'init.php';
include 'actions.php';

/**
 * make the all action in one page
 * like [add , delete ,edit,show]
 */

 //make the var to get all page
 $do='';

 //ckeck the do get method
 if(isset($_GET['do'])){
     //set the var to  the request
     $do=$_GET['do'];
 }
 else{
     $do='manage';
      }
if($do=='manage'){
    //get all data
    $all=getAll('baby_sitter');

    ?>

<h1 class="text-danger text-center">ادارة </h1>
  <div class="container">
    <table class="table table-hover">
        <tr>
            <td>رقم الحاضنة</td>
            <td>اسم الحاضنة</td>
            <td>البريد  الاكتروني</td>
            <td>مكانة الاقامة</td>
            <td>العمر</td>
            <td> المؤهلات</td>
            <td>الجنسية</td>
            <td>رقم الجوال</td>
            <td>ادارة</td>
        </tr>
        
            <!--loop throw the data and output  -->
    <?php foreach($all as $d): ?>
    <tr>
        <td><?php echo $d['id'] ?></td> 
        <td><?php echo $d['sitter_name'] ?></td> 
        <td><?php echo $d['email'] ?></td> 
        <td><?php echo $d['address_sitter'] ?></td> 
        <td><?php echo $d['age'] ?></td>
        <td><?php echo $d['cv'] ?></td> 
        <td><?php echo $d['nationalities'] ?></td>  
        <td><?php echo $d['phone'] ?></td>
        <td>
          <a href="sitter.php?do=edit&id=<?php echo $d['id'] ?>" class="btn btn-success">تعديل</a>
          <a href="?do=delete&id=<?php echo $d['id'] ?>" class="btn btn-danger">حذف</a>
        </td>
       
         </tr>
     <?php endforeach;?>
        
    </table>
  </div>

    <?php
}
elseif($do=='create')
{
    if(isset($_POST['add'])){
        //set the var
        $name=$_POST['fullname'];
        $pass=$_POST['pass'];
        $check_pass=$_POST['type_pass'];
        $shapass=sha1($pass);
        $emali=$_POST['email'];
        $tel=$_POST['tel'];
        $age=$_POST['age'];
        $address=$_POST['address'];
        $cv=$_POST['cv'];

        //validetion the form
        $errors=[];
        if(empty($name)){
            $errors[]='username cannt be empty';
        }
        if($pass != $check_pass){
            $errors[]='password not match';
        }
        if(empty($emali)){
            $errors[]='emali cannt be empty';
        }
        if(empty($tel)){
            $errors[]='phone cannt be empty';
        }
        if(empty($age)){
            $errors[]='age cannt be empty';
        }
        if(empty($address)){
            $errors[]='address cannt be empty';
        }
        if(empty($cv)){
            $errors[]='cv cannt be empty';
        }

        //loop throw the errors
        foreach($errors as $r){
            echo '<br>';
            echo "<div class='container alert alert-danger'>$r</div>";
        }
        //check the erros is empty
        if(empty($errors)){
            //make query
            $sql="INSERT into  baby_sitter (sitter_name,email,password,address_sitter,phone,age,cv) values('{$name}','{$emali}','{$shapass}','{$tel}','{$address}','{$age}','{$cv}')";
            //prepare the sql
            $stmt=$con->prepare($sql);
            //execute the $query
            $stmt->execute();
            if($stmt){
               echo " <script>alert('تمت الاضافة بنجاح')</script>";
             
            }
        }
        
    }
    else{
        echo '<br>';
        echo '<b class="alert alert-danger text-center">cannt brows the page</b> ';
    }
    ?>
      <!-- make the from of regester -->
      <div class="container">
	
	 <div class="row">
<div class="col-md-3">
	
  <!-- some code here -->
  </div>
  <div class="col-md-9"><h1>تعديل البيانات</h1>

  <div class="panel panel-primary">
  <div class="panel-heading">تسجيل حاضنة جديدة</div>
  <div class="panel-body">
  <form action="sitter.php?do=create" method="post">
  <div class="form-group">
      <label class="control-label">الاسم</label>
       <input type="text" class="form-control" placeholder="الاسم" name="fullname" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">كلمة السر</label>
       <input type="password" class="form-control" placeholder="كلمة السر" name="pass">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">تاكيد كلمة السر</label>
       <input type="password" class="form-control" placeholder="تاكيد كلمة السر" name="type_pass" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">البريد الاكتروني</label>
       <input type="emali" class="form-control" placeholder="البريد الاكتروني" name="email" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">الهاتف</label>
       <input type="text" class="form-control" placeholder="رقم الجوال" name="tel" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">العمر</label>
       <input type="number" class="form-control" placeholder="العمر" name="age" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">مكان الاقامة</label>
       <input type="text" class="form-control" placeholder="مكان الاقامة" name="address" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">المؤهلات</label>
       <input type="text" class="form-control" placeholder="المؤهلات" name="cv" >
      </div>
      <div class="form-group">
          <input type="submit" name="add" class="btn btn-info" value="اضافة">
      </div>
  </form>

    
  </div>
</div>	
  </div>

</div>

</div>


    <?php
   
}
elseif($do=='edit')
{
    //make the form to edit data

    ?>
            <!-- make the from of regester -->
            <div class="container">
	
    <div class="row">
<div class="col-md-3">
   
 <!-- some code here -->
 </div>
 <div class="col-md-9"><h1>تعديل البيانات</h1>
 <div class="panel panel-primary">
 <div class="panel-heading">تسجيل حاضنة جديدة</div>
 <div class="panel-body">
     <div class="form-group">
     <label class="control-label">الاسم</label>
      <input type="text" class="form-control" placeholder="الاسم" name="fullanme" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">كلمة السر</label>
      <input type="password" class="form-control" placeholder="كلمة السر" name="pass">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">تاكيد كلمة السر</label>
      <input type="password" class="form-control" placeholder="تاكيد كلمة السر" name="type_pass" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">البريد الاكتروني</label>
      <input type="emali" class="form-control" placeholder="البريد الاكتروني" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">الهاتف</label>
      <input type="text" class="form-control" placeholder="رقم الجوال" name="email" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">العمر</label>
      <input type="number" class="form-control" placeholder="العمر" name="age" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">مكان الاقامة</label>
      <input type="text" class="form-control" placeholder="مكان الاقامة" name="address" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">المؤهلات</label>
      <input type="text" class="form-control" placeholder="المؤهلات" name="cv" >
     </div>
     <div class="form-group">
         <input type="submit" name="add" class="btn btn-info" value="التعديل">
     </div>
 </div>
</div>	
 </div>

</div>

</div>

    <?php
}
elseif($do=='delete')
{
    $id=isset($_GET['id'])&& is_numeric($_GET['id'])?intval($_GET['id']):0;
    echo 'aa';
}
elseif($do=='active')
{
    echo 'active';
}

?>