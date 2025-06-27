<!DOCTYPE html>
<html>
<head>
  <title>اختبار التسجيل</title>
</head>
<body>

<h2>نموذج التسجيل</h2>

<form id="signupForm">
  <input type="text" name="username" placeholder="اسم المستخدم" required><br>
  <input type="password" name="password" placeholder="كلمة المرور" required><br>
  <input type="email" name="email" placeholder="البريد الإلكتروني" required><br>
  <input type="text" name="phone" placeholder="رقم الهاتف" required><br>
  <button type="submit">تسجيل</button>
</form>

<pre id="result"></pre>

<script>
document.getElementById("signupForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("https://quiqmarket.fwh.is/ecommerce/auth/signup.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("result").textContent = data;
  })
  .catch(err => {
    document.getElementById("result").textContent = "خطأ في الاتصال: " + err;
  });
});
</script>

</body>
</html>
