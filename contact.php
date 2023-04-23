<?php
if (isset($_POST['save']))
{
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $text = $_POST['text'];

    $token = "5811448119:AAEMCpxQOzLhLsTSJYdDKSJkFgKGSnFL7eE";
    $chatid = "368844038";

    $message = "На сайте вам оставил заявку. Имя $name, по адресу $adress перезвоните на $phone, требование  $text";
    $tbot = file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode($message));
    echo "Спасибо за сообшение мы скоро с вами свяжемся!";

    if ($DB->query("INSERT INTO contact(id, name, adress, phone, text) VALUES (?,?,?,?,?)",
    array(null, "$name", "$adress", "$phone", "$text")))
    {
        echo "<div class='alert alert-success alert-styled-right alert-arrow-right alert-bordered'>
                                            <span class='text-semibold'>Информация сохранена</span> 
								    </div>" ;
        echo '<script>window.location.href = "index.php"</script>';
    }else{
        echo "Ошибка при отправки данные";
    }
}

?>

<div class="contact-page comment-area pt-50 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12">
                <div class="comment-sidebar">
                    <div class="section-title d-inline-block">
                        <h3>
                            Leave Reply
                        </h3>
                    </div>
                    <div class="post-comment pt-25 ">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <ul class="name">
                                        <li><label for="name">Имя</label></li>
                                        <li><input type="text" name="name" id="name"></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <ul class="email pt-15 pt-sm-0">
                                        <li><label for="">Адресс населенный пункт или город, улица</label></li>
                                        <li><input type="text" name="adress" id="email"></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <ul class="email pt-15 pt-sm-0">
                                        <li><label for="">Телефон</label></li>
                                        <li><input type="number" name="phone" id="email"></li>
                                    </ul>
                                </div>
                                <div class="col-xl-12">
                                    <ul class="text-area pt-10">
                                        <li><label for="text-area">Оставьте свои требование</label></li>
                                        <li>
                                            <textarea name="text" id="text-area" cols="30" rows="10"></textarea>
                                        </li>
                                    </ul>
                                    <div class="submit pt-30">
                                        <input type="submit" name="save" value="Отправить">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12">
                <div class="contact-info">
                    <div class="section-title d-inline-block text-uppercase">
                        <h3>
                            Contact info
                        </h3>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                    <ul class="contact pt-15">
                        <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Dambo dika,USA,road123</span></li>
                        <li><i class="fas fa-envelope" aria-hidden="true"></i><span>dotsee@one.com</span></li>
                        <li><i class="fas fa-phone-alt" aria-hidden="true"></i><span>(+11) 987654321</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =================Comment  Area Ends================= -->

<!-- =================Subscribe Area Starts================= -->

