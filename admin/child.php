<?php
//include the file of database
include 'include/header.php';
include 'init.php';

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
if($do=='manage'){?>
  <h1 class="text-danger text-center">ادارة </h1>
  <div class="container">
    <table class="table table-hover">
        <tr>
            <td>رقم الطفل</td>
            <td>اسم الطفل</td>
            <td>مكانة الاقامة</td>
            <td>العمر</td>
            <td>اسم امه</td>
            <td>الجنسية</td>
            <td>ادارة</td>
        </tr>
        <tr>
            
        </tr>
    </table>
  </div>
<?php 
}
elseif($do=='create')
{
    ?>
      <!-- make the from of regester -->
      <div class="container">
	
	 <div class="row">
<div class="col-md-3">
	
  <!-- some code here -->
  </div>
  <div class="col-md-9"><h1>التسجيل</h1>
  <div class="panel panel-primary">
  <div class="panel-heading">تسجيل طفل جديد</div>
  <div class="panel-body">
      <div class="form-group">
      <label class="control-label">الاسم الكامل</label>
       <input type="text" class="form-control" placeholder="اسم الطفل" name="name_chlid">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">كلمة السر</label>
       <input type="password" class="form-control" placeholder="كلمة السر" name="pass">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">تاكيد كلمة السر</label>
       <input type="password" class="form-control" placeholder="تاكيد كلمة السر" name="type_pass">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">البريد الاكتروني</label>
       <input type="emali" class="form-control" placeholder="البريد الاكتروني" name="emali">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">الهاتف</label>
       <input type="text" class="form-control" placeholder="رقم الجوال" name="tel" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">العمر</label>
       <input type="number" class="form-control" placeholder="العمر" name="age">
      </div>
      <div class="form-group">
      <label for="username" class="control-label">مكان الاقامة</label>
       <input type="text" class="form-control" placeholder="مكان الاقامة" name="adderss" >
      </div>
      <div class="form-group">
      <label for="username" class="control-label">اسم الوالدة</label>
       <input type="text" class="form-control" placeholder="اسم الوالدة" name="m_name">
      </div>
      <div class="form-group">
          <input type="submit" name="add" class="btn btn-info" value="اضافة الطفل">
      </div>
  </div>
</div>	
  </div>

</div>

</div>


    <?php
}
elseif($do=='edit')
{
    $id=isset($_GET['id'])&& is_numeric($_GET['id'])?intval($_GET['id']):0;
    
    ?>
       <div class="container">
	
    <div class="row">
<div class="col-md-3">
   
 <!-- some code here -->
 </div>
 <div class="col-md-9"><h1>التسجيل</h1>
 <div class="panel panel-primary">
 <div class="panel-heading">تسجيل طفل جديد</div>
 <div class="panel-body">
     <div class="form-group">
     <label class="control-label">الاسم الكامل</label>
      <input type="text" class="form-control" placeholder="اسم الطفل" name="name_chlid">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">كلمة السر</label>
      <input type="password" class="form-control" placeholder="كلمة السر" name="pass">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">تاكيد كلمة السر</label>
      <input type="password" class="form-control" placeholder="تاكيد كلمة السر" name="type_pass">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">البريد الاكتروني</label>
      <input type="emali" class="form-control" placeholder="البريد الاكتروني" name="emali">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">الهاتف</label>
      <input type="text" class="form-control" placeholder="رقم الجوال" name="tel" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">العمر</label>
      <input type="number" class="form-control" placeholder="العمر" name="age">
     </div>
     <div class="form-group">
     <label for="username" class="control-label">مكان الاقامة</label>
      <input type="text" class="form-control" placeholder="مكان الاقامة" name="adderss" >
     </div>
     <div class="form-group">
     <label for="username" class="control-label">اسم الوالدة</label>
      <input type="text" class="form-control" placeholder="اسم الوالدة" name="m_name">
     </div>
     <div class="form-group">
         <input type="submit" name="edit" class="btn btn-info" value=" تعديل">
     </div>
 </div>
</div>	
 </div>

</div>

</div>

 <?php }
elseif($do=='delete')
{
    $id=isset($_GET['id'])&& is_numeric($_GET['id'])?intval($_GET['id']):0;

    //delete the chlid
}
elseif($do=='active')
{
    echo 'active';
}

?>