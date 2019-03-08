@extends('layouts.frontend')
@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-classic">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">FAQ</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-static">
                        <h1 data-title-border>FAQ</h1>

                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col">



                    <div class="toggle toggle-primary" data-plugin-toggle>
                        <section class="toggle active">
                            <label>Dropshiping nədir?</label>
                            <p>Qısaca saxlama yeriniz olmadan mal sataraq pul qazanmaq deməkdir!. Hər hansı bir malı, tədarükçünün saytından alıb öz mağazanızda vəya hər hansı bir online platformada satışa çıxararsınız. Tədarükçü 1`ə satırsa siz 3`ə satarsız. Müştəri saytınıza gəlib sifariş verib pulunu ödəyər. Siz də birbaşa tədarükçüyə ödəyib müştərinin məlumatlarını ona yönləndirərsiniz. Beləliklə, mala əliniz belə dəymədən mal müştərinizə göndərilər. </p>
                        </section>


                        <!-- 		<section class="toggle">
                                    <label>Curabitur eget leo at velit imperdiet viaculis vitaes?</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                                </section> -->

                        <section class="toggle">
                            <label>Amazonda Ticarət etməyin riski varmı?</label>
                            <p>Bu da çox maraqlı bir sualdır. Çünkü sadəcə Amazonda deyil, harada ticarət edirsiniz edin əlbəttədə ki risk vardır. Kursumuzda sizə 0 risklə e-ticarət etməyi öyrədəcəyimizi iddia etmirik. Yalnızca qısa yollardan istifadə edərək riski azaltmağı öyrənəcəksiniz. </p>
                        </section>

                        <section class="toggle">
                            <label>Amazon FBA nədir?</label>
                            <p>Amazon FBA (Fulfilled by Amazon): Öz istehsal etdiyiniz vəya hər hansı bir istehsalçıdan – tədarükçüdən hazırlatdığınız malları Amazon depolarına göndərməyinizi və bu malın qiyməti ilə açıqlama hissəsini əlavə etdikdən sonra satılan hər malın Amazon tərəfindən müştərilərinizə göndərilməsini təmin edən bir iş modelidir. Amazon FBA edərkən Amazon hər şeyi öz üzərinə götürür (paketləmə, çatdırılma, müştəri xidmətləri və s.) Sizə sadəcə mallarıınızı Amazon depolarına göndərmək və mallarınızı Amazonda siyahıya salmaq qalır. </p>
                        </section>
                        <section class="toggle">
                            <label>Amazonda pul qazanmaq asan mı?</label>
                            <p>Yoldaşlar asan pul qazanmaq deyə bir şey yoxdur. Hansı bir işi edirsiniz edin, bir yerdə mütləq zəhmət çəkmək məcburiyyətindəsiniz. Yuxusuz qaldığınız günlər, heç yatmadığınız günlər olacaq. Yəni başlanğıcda, bu işi davamlı hala salmaq üçün mütləq çox çalışmalı olacaqsınız. Asan pul qazanma və dərhal zəngin olma xəyalları quran insanlar xəyal qırıqlığına məruz qalacaqdır. Amma iş olaraq Amazonda pul qazanmaq asandır. Belə ki müdir stresi olmadan, evinizdə çayınızı vəya qəhvənizi içərək günlük bir neçə saat çalışıb öz işini etməkdir Amazonda pul qazanmaq. Lakin asan pul qazanmaq deyildir</p>
                        </section>
                        <section class="toggle">
                            <label>Amazonda satış etmək üçün şirkət olmağımız gərəkir mi</label>
                            <p>Xeyir gərəkmir. Fərdi olaraq satış edə bilərsiniz. Vaxt keçdikcə daha çox qazanınca şirkətləşmək daha yaxşı olacaqdır. O vaxta qədər də onsuzda bu işdə daha uğurlu yollar qət edəcəksiniz.</p>
                        </section>

                        <section class="toggle">
                            <label>Nə vaxt pul qazanmağa başlayacam?</label>
                            <p>Əslində bu sualın cavabı sizə bağlıdır. Bilirsiniz bu iş üçün zaman, bilgi, əzim, istək və zəhmət gərəkir. Bütün bu amilləri doğru şəkildə bir yerə gətirəbilərsinizsə o qədər qısa bir vaxtda qazanacaqsınız ki! Hər şeyi zamanla, tələsmədən fəndlərlə edərək. Bir də insandan insane dəyişir təbii ki</p>
                        </section>





                        <section class="toggle">
                            <label>Bu işdən nə qədər pul qazanacam? Çalışmağıma dəyər mi?</label>
                            <p>Bu sualın dəqiq bir cavabı yoxdur təəsüf ki. Bir adamın nə qədər qazanabiləcəyi, deyilənləri nə qədər dəqiqliklə tətbiq edəcəyi, davamlı olaraq çalışıb çalışmamağına və bu işə verdiyi əməyə görə dəyişər. Yəni bu sualın cavabını əslində özünüzdə axtarmalısınız. Bir də ən əsası seçəcəyiniz mala görə təyin olunur. Bu işdən günlük 50-100 dollar qazanabiləcəyiniz kimi 1000-2000 dllar kimi böyük rəqəmlər vəya daha çoxunu da qazanmağınız mümkündür. </p>
                        </section>
                        <section class="toggle">
                            <label>Etdiyimiz iş qanunidir mi?</label>
                            <p>100% qanuni bir işdir. Və vergilərinizi ödədiyiniz təqdirdə də heç bir problem yaşamayacaqsınız.</p>
                        </section>

                        <section class="toggle">

                            <label>İngilis dilim yoxdu. Bu işi edəbilərəm mi?</label>
                            <p>Yeni başlamısınızsa 15 gün keçir. Sonralar 1 həftəyə Amazon hesabınıza köçər. Bank hesabınıza da mədaxillər ayda 2 dəfə olur. Yəni 15 gün arayla bank hesabınıza pullar köçür</p>
                        </section>

                        <section class="toggle">
                            <label>Yaş məhdudiyyəti var mı?</label>
                            <p>BƏLİ! Çünkü Amazon və Payoneer şəxiyyətinizi təsdiqləmək üçün bir neçə sənəd istəyəcəklər. Əgər şəxsiyyət vəsiqəsi vəya passport kimi sənədləriniz yoxdursa təəsüf ki bu işi edəbilməzsiniz. Təbii ki başqa birinin adı ilə edəbilərsiniz amma o zaman da mütləq o adamdan icazə almağınız gərəkdir</p>
                        </section>
                        <section class="toggle">
                            <label>Malı satdıqdan nə qədər sonra pul hesabımıza mədaxil olunar?</label>
                            <p>Yeni başlamısınızsa 15 gün keçir. Sonralar 1 həftəyə Amazon hesabınıza köçər. Bank hesabınıza da mədaxillər ayda 2 dəfə olur. Yəni 15 gün arayla bank hesabınıza pullar köçür. </p>
                        </section>

                        <section class="toggle">
                            <label>Amazon FBA ilə FMB-I eyni vaxta edə bilərik mi?</label>
                            <p>Edəbilərsiniz amma tövsiyə etmirik. Çünkü FBA ilə digər modelləri bir saxlamaq tutmaq problem olar. Kiçik bir nöqsanda hesabınız bağlanacaqdır. Yəni sizin üçün heç də yaxşı olmaz. İki iş modelini ayrı ayrı komputerlərdən və ayr ayrı hesablardan etməlisiniz. Ananızın, atanızın  vəya hər hansı bir yaxınınızın adına, onlardan icazə alaraq fərqli komputerlərdə FBM vəya Dropshipping işini görəbilərsiniz.</p>
                        </section>
                        <section class="toggle">
                            <label>Amazonda hansı səbəblərdən otürü hesabım bağlana bilər?</label>
                            <p>Normalda FBA edənlər üçün hesab bağlanması FBÇ edənlərə nisbətən daha azdır. Hətdən artıq sayıda geri qayıtma, çox sayıda mənfi şərhlər vəya şikayət və panent-marka problemlərindən otürü hesabınız bağlana bilər. Dropshipping vəya FMB edənlər isə yuxarıda yazılanlarla bərabər həm də çox vaxt maddiyyatı təmin edəbilmədikləri üçün hesabları bağlanar. </p>
                        </section>
                        <section class="toggle">
                            <label>Çinli istehsalçılarla necə əlaqə saxlaya bilərik?</label>
                            <p>Ümumiyyətlə Alibaba üzərindən əlaqə saxlayırsınız ancaq Skype, Wechat vəya Mail üzərindən də əlaqə saxlaya bilərsiniz</p>
                        </section>
                        <section class="toggle">
                            <label>Çindən aldığımız mallar Azərbaycan sonra Amerika Amazon deposuna mı gedir?</label>
                            <p>Xeyir! Birbaşa Amazon deposuna gedir</p>
                        </section>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection