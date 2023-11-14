
<?php
$pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
$userLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($userLanguage === 'ar') {
    echo '<div class="overlay"></div>';
    echo '<div class="language-notification warning">! هذه الصفحة ('. $pageName .') لم يتم ترجمتها بعد إلى اللغة العربية. سيتم تحويلك تلقائياً إلى اللغة الإنجليزية بعد 5 ثوانٍ من الآن.</div>';
    echo '<script>
            setTimeout(function(){
                window.location.href = "../../'. $pageName .'";
            }, 6000);
          </script>';
} else {
    // إذا كنت ترغب في تحويل المستخدم إلى الصفحة الرئيسية بلغة الإنجليزية، استخدم الكود التالي:
    // header('Location: ../../index.php');
}
?>
