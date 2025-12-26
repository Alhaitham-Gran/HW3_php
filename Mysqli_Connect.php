<?php
// 1. إعدادات قاعدة البيانات
$servername = "localhost"; // اسم الخادم (غالباً localhost)
$username   = "root";      // اسم المستخدم (الافتراضي في XAMPP هو root)
$password   = "";          // كلمة المرور (الافتراضي في XAMPP فارغة)
$dbname     = "test_db";   // ضع اسم قاعدة البيانات الخاصة بك هنا

// 2. إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. التحقق من وجود أخطاء في الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// 4. ضبط الترميز لدعم اللغة العربية بشكل صحيح
$conn->set_charset("utf8mb4");

// رسالة تأكيد (يمكنك حذفها لاحقاً)
// echo "تم الاتصال بنجاح";
?>