<?php
#######################
# KULLANICI BİLGİLERİ #
#######################
$account = array(
    'username' => '', // Kullanıcı adınız
    'password' => '' // Şifreniz
);
// Kullanıcı Bilgisi Boş/Dolu Kontrolü
if($account['username'] == '' || $account['password'] == '')
{
    die("Please put config.php file in your username and password.");
}




######################
# OTOMASYON AYARLARI #
######################

// Zaman Tüneli Medya Beğeni Ayarları
$timeline_post_liker = array(
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);


// Zaman Tüneli Medya Yorum Ayarları
$timeline_post_commenter = array(
    'is_likes' => 0, // Yorum atılan gönderilerin aynı zamanda beğenilmesini istiyorsanız değeri 1 yapın.
    'interval' => 50, // Her yorum sonrası beklenecek süre (Minimum Saniye: 50)
    'have_err' => 120, // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
    'comments' => array('omg', 'cool', 'wow') // Gönderilere atılacak yorumları yazın
);


// Zaman Tüneli Yorum Beğeni Ayarları
$timeline_post_comment_liker = array(
    'max_like' => 1, // Her medyada beğenilecek yorum sayısı (Maksimum Adet: 5)
    'is_likes' => 1, // Yorumların beğenildiği medyalarıda beğenmek istiyorsanız değeri 1 yapın.
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

// Paylaşılan Medyaları Silme Ayarları
$self_posted_media_deleter = array(
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

// Direkt Mesaj Kutusu Mesajlarını Silme Ayarları
$self_direct_messages_deleter = array(
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

$target_user_followers_follower = array(
    'interval' => 10, // Her takip sonrası beklenecek süre (Minimum Saniye: 10)
    'target_username' => 'reynmen', // Takipçilerini takip etmek istediğiniz kullanıcının adını yazın.
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

$target_user_following_follower = array(
    'interval' => 10, // Her takip sonrası beklenecek süre (Minimum Saniye: 10)
    'target_username' => 'reynmen', // Takip ettiklerini takip etmek istediğiniz kullanıcının adını yazın.
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

$self_non_followers_unfollower = array(
    'interval' => 3, // Her takip bırakma sonrası beklenecek süre (Minimum Saniye: 3)
    'have_err' => 120, // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
    'max_unfollow' => 200 // Komut verildiğinde maksimum takipten çıkılacak kişi sayısı (Maksimum: 200)
);

$story_feeds_seener = array(
    'interval' => 10, // Her takip bırakma sonrası beklenecek süre (Minimum Saniye: 3)
    'have_err' => 120, // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
    'max_seen' => 200 // Komut verildiğinde maksimum izlenecek hikaye sayısı (Maksimum: 200)
);

$target_user_feeds_liker = array(
    'interval' => 20, // Her beğeni sonrası beklenecek süre (Minimum Saniye: 20)
    'target_username' => 'reynmen', // Medyalarını beğenmek istediğiniz kullanıcının adını yazın.
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);

$target_user_feeds_saver = array(
    'interval' => 20, // Her kaydetme sonrası beklenecek süre (Minimum Saniye: 20)
    'target_username' => 'reynmen', // Medyalarını kaydetmek istediğiniz kullanıcının adını yazın.
    'have_err' => 120 // Her hangi bir hata alınır ise beklenecek süre (Minimum Saniye: 120)
);