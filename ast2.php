<?php 

include "connect.php" ;

sendEmail(
    "hachichiyahia5@gmail.com",
    "Quiq Market verify code",
    '<div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; background-color: #fafafa;">
 <img src="cid:logo_img" alt="Quiq Market" style="width: 100px; margin-bottom: 20px;" />
 <h4 style="color: #202124; font-size: 20px; margin-bottom: 10px;">  مرحبا بك كأول عميل</h4>
 <h2 style="color: #202124; font-size: 20px; margin-bottom: 10px;">رمز التحقق الخاص بك</h2>
  <p style="color: #5f6368; font-size: 16px; margin-bottom: 30px;">
    شكرًا لاستخدامك <strong>Quiq Market</strong>. رمز التحقق الخاص بك هو:
  </p>
  <div style="font-size: 32px; letter-spacing: 4px; font-weight: bold; color: #1a73e8; text-align: center; padding: 10px 0;">
    927431
  </div>
  <p style="color: #5f6368; font-size: 14px; margin-top: 30px;">
   إذا لم يعمل الرمز حاول إعادة المحاولة.
  </p>
  <p style="color: #999; font-size: 12px; margin-top: 20px;">
   شكرا على تسجيل الدخول.
  </p>
</div>'
);


?>