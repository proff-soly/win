<?php
    include './inc/db.php';
    include './inc/form.php';
    include './inc/select.php';
    include './inc/db_close.php'; 
?>
<?php include_once './parts/header.php'; ?>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">اربح مع نور</h1>
            <p class="lead fw-normal">باقي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على ربح نسخه مجانيه من برنامج</p>
        </div>
        <h3>للدخول للسحب اتبع ما يلي</h3>
        <div class="container">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك يالتاريخ المذكور اعلاه</li>
        <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه عباره عن اسأله حره للجميع</li>
        <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحة التسجيل هنا حيث سنقوم بتسجيل اسمك وايميلك</li>
        <li class="list-group-item">بنهاية البث سيتم ختيار اسم واحد من قاعدة البيانات</li>
        <li class="list-group-item">الرابح سيحصل على نسخه مجانيه من برنامج كامتازيا</li>
    </ul>
        </div>
    </div>

    
    <div class="container">
    <div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
                <h3>الرجاء ادخل معلوماتك</h3>
                <div class="mb-3">
                    <label for="firstName" class="form-label">الاسم الاول</label>
                    <input name="firstName" type="text" class="form-control" id="firstName" value ="<?php echo $firstName ?>" >
                    <div  class="form-text error"><?php echo $errors['firstNameError'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">الاسم الاخير</label>
                    <input name="lastName" type="text" class="form-control" id="lastName" value ="<?php echo $lastName ?>" >
                    <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">البريد الالكنروني</label>
                    <input name="email" type="text" class="form-control" id="email" value ="<?php echo $email ?>" >
                    <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


    <div class="d-grid gap-2 col-6 mx-auto my-5 ">
        <button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
اختيار الرابح</button>
    </div>
  
 
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach($users as $user): ?>
                    <h1 class="text-center display-3 modal-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName'])?></h1>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

        <?php include_once './parts/footer.php'?>
    </div>
</div>




