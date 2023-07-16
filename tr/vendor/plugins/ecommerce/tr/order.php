<?php

return [
    'statuses' => [
        'pending' => 'ONAY BEKLENİYOR',
        'processing' => 'ONAYLANDI | HAZIRLANIYOR',
        'completed' => 'TAMAMLANDI',
        'canceled' => 'SİPARİŞ İPTAL EDİLDİ',
    ],
    'menu' => 'Siparişler',
    'create' => 'Sipariş Oluştur',
    'cancel_error' => 'Sipariş dağıtıma çıkmış veya tamamlanmamış.',
    'cancel_success' => 'Siparişi Başarılı Bir Şekilde İptal Ettiniz',
    'incomplete_order' => 'Tamamlanmamış Siparişler',
    'order_id' => 'Sipariş Kimliği',
    'product_id' => 'Ürün ID',
    'customer_label' => 'Müşteri',
    'tax_amount' => 'Vergi Miktarı',
    'shipping_amount' => 'Kargo Ücreti',
    'payment_method' => 'Ödeme Türü',
    'payment_status_label' => 'Ödeme Durumu',
    'manage_orders' => 'Sipariş Yönetimi',
    'order_intro_description' => 'Mağazanızın siparişleri olduğunda, bu siparişleri işleyeceğiniz ve takip edeceğiniz yer burasıdır.',
    'create_new_order' => 'Yeni Sipariş',
    'manage_incomplete_orders' => 'Tamamlanmamış Siparişleri Yönetin',
    'incomplete_orders_intro_description' => 'Eksik sipariş, bir müşteri sepete bir ürün eklediğinde, satın alma bilgilerini doldurmaya devam ettiğinde ancak ödeme işlemini tamamlamadığında oluşturulan bir sipariştir.',
    'invoice_for_order' => 'Sipariş İçin Fatura',
    'created' => 'Oluşturuldu',
    'invoice' => 'Fatura',
    'return' => 'İade',
    'total_refund_amount' => 'Toplam İade Tutarı',
    'total_amount_can_be_refunded' => 'En fazla iade edilebilecek tutar',
    'refund_reason' => 'İade nedeni (İsteğe Bağlı)',
    'products' => 'Ürün(ler)',
    'default' => 'Varsayılan',
    'system' => 'Sistem',
    'new_order_from' => ':customer tarafından :order_id numaralı yeni sipariş alındı!',
    'confirmation_email_was_sent_to_customer' => 'Sipariş özeti müşteriye e-posta yoluyla gönderildi!',
    'address_name_required' => 'Ad Soyad zorunludur.',
    'address_phone_required' => 'Telefon Numarası zorunludur.',
    'address_email_required' => 'E-Posta Adresi zorunludur.',
    'address_email_unique' => 'Bu e-postaya sahip müşteri zaten var. Bu sizin hesabınızsa lütfen giriş yapınız!',
    'address_state_required' => 'İl seçin.',
    'address_city_required' => 'İlçe seçin.',
    'address_country_required' => 'Ülke zorunludur.',
    'address_address_required' => 'Adres alanı zorunludur.',
    'create_order_from_payment_page' => 'Sipariş, ödeme sayfasından oluşturuldu',
    'order_was_verified_by' => 'Sipariş %user_name% Tarafından Onaylandı',
    'new_order' => 'Yeni Sipariş :order_id',
    'payment_was_confirmed_by' => 'Ödeme %user_name% tarafından onaylandı (Tutar :money)',
    'edit_order' => 'Siparişi Düzenle: :code',
    'confirm_order_success' => 'Sipariş başarıyla onaylandı!',
    'error_when_sending_email' => 'E-posta gönderirken bir hata oluştu',
    'sent_confirmation_email_success' => 'Onay e-postası başarıyla gönderildi!',
    'order_was_sent_to_shipping_team' => 'Sipariş kargo firmasına gönderildi.',
    'by_username' => '%user_name% tarafından',
    'shipping_was_created_from' => 'Gönderim, %order_id% siparişinden oluşturuldu',
    'shipping_was_canceled_success' => 'Kargo başarıyla iptal edildi!',
    'shipping_was_canceled_by' => 'Kargo %user_name% tarafından iptal edildi',
    'update_shipping_address_success' => 'Gönderim adresini başarıyla güncelleyin!',
    'order_was_canceled_by' => 'Sipariş %user_name% tarafından iptal edildi',
    'confirm_payment_success' => 'Ödeme başarıyla onaylandı!',
    'refund_amount_invalid' => 'Geri ödeme tutarı daha düşük veya şuna eşit olmalıdır :price',
    'number_of_products_invalid' => 'Ürün sayısı iadesi geçerli değildir!',
    'cannot_found_payment_for_this_order' => 'Bu sipariş için ödeme bulunamadı!',
    'refund_success_with_price' => 'Başarılı geri ödeme :price',
    'refund_success' => 'Geri ödeme başarılı!',
    'order_is_not_existed' => 'Sipariş Mevcut Değil',
    'reorder' => 'Siparişi Değiştir',
    'sent_email_incomplete_order_success' => 'Eksik siparişi hatırlatmak için e-posta başarıyla gönderildi!',
    'applied_coupon_success' => '":code" kuponu başarıyla uygulandı!',
    'new_order_notice' => '<span class="bold">:count</span> Yeni Siparişiniz var',
    'view_all' => 'Hepsini Gör',
    'cancel_order' => 'İptal Talebi Oluştur',
    'order_canceled' => 'Sipariş İptal Edildi',
    'order_was_canceled_at' => 'Sipariş İptal Edildi',
    'completed' => 'Tamamlandı',
    'uncompleted' => 'Tamamlanmamış',
    'sku' => 'SKU',
    'warehouse' => 'Depo',
    'sub_amount' => 'Ara Toplam',
    'coupon_code' => 'Kupon Kodu: ":code"',
    'shipping_fee' => 'Kargo Ücreti',
    'tax' => 'Vergi',
    'refunded_amount' => 'Geri Ödenen Tutar',
    'amount_received' => 'Gerçekte alınan miktar',
    'download_invoice' => 'Faturayı İndir',
    'print_invoice' => 'Faturayı Görüntüle',
    'add_note' => 'Not Ekle...',
    'order_was_confirmed' => 'Sİpariş Onaylandı',
    'confirm_order' => 'Siparişi Onayla',
    'confirm' => 'Onayla',
    'order_was_canceled' => 'Sipariş İptal Edildi',
    'pending_payment' => 'Ödemeyi Onayla',
    'payment_was_accepted' => 'Ödeme :money kabul edildi',
    'payment_was_refunded' => 'ÖDEME İADE EDİLDİ',
    'confirm_payment' => 'Onayla',
    'refund' => 'İade',
    'all_products_are_not_delivered' => 'Ürünler teslim edilemedi!',
    'delivery' => 'Kargo Durumu Belirle',
    'history' => 'Sipariş Hareketleri',
    'order_number' => 'Sipariş Numarası',
    'from' => 'İtibaren',
    'status' => 'Sipariş Durumu',
    'successfully' => 'Başarılı',
    'transaction_type' => 'İşlem Türü',
    'staff' => 'Personel',
    'refund_date' => 'İade Tarihi',
    'n_a' => 'N\\A',
    'payment_date' => 'Ödeme Onaylanma Tarihi',
    'payment_gateway' => 'Geri Ödeme Yöntemi',
    'transaction_amount' => 'İşlem Tutarı',
    'resend' => 'Yeniden Gönder',
    'default_store' => 'Varsayılan Mağaza',
    'update_address' => 'Adresi Düzenle',
    'have_an_account_already' => 'Müşteri Giriş Yaptı!',
    'dont_have_an_account_yet' => 'Müşteri Giriş Yapmadı!',
    'mark_payment_as_confirmed' => '<span>:method</span>\'u onaylandı olarak işaretle',
    'resend_order_confirmation' => 'Sipariş Onayını Tekrar Gönder',
    'resend_order_confirmation_description' => 'Onay e-postası <strong>:email</strong> adresine gönderilecek mi?',
    'send' => 'Gönder',
    'update' => 'Kaydet',
    'cancel_shipping_confirmation' => 'Gönderim onayı iptal edilsin mi?',
    'cancel_shipping_confirmation_description' => 'Gönderim onayı iptal edilsin mi?',
    'cancel_order_confirmation' => 'Onaylanan sipariş iptal edilsin mi?',
    'cancel_order_confirmation_description' => 'Bu siparişi iptal etmek istediğinizden emin misiniz? Bu işlem geri alınamaz!',
    'confirm_payment_confirmation_description' => '<strong>:method</strong> tarafından işlendi. Sistem dışında ödeme aldınız mı? Bu ödeme sisteme kaydedilmez ve iade edilemez',
    'save_note' => 'Kaydet',
    'order_note' => 'Sipariş Notu',
    'order_note_placeholder' => 'Note about order, ex: time or shipping instruction.',
    'order_amount' => 'Sipariş Miktarı',
    'additional_information' => 'Ek Bilgi',
    'notice_about_incomplete_order' => 'Eksik siparişle ilgili uyarı',
    'notice_about_incomplete_order_description' => 'Tamamlanmayan siparişle ilgili e-postanın <strong>:email</strong> adresine gönderileceğini hatırlat?',
    'incomplete_order_description_1' => 'Eksik bir sipariş, potansiyel bir müşterinin ürünleri alışveriş sepetine koyup ödeme sayfasına kadar gitmesine rağmen işlemi tamamlamamasıdır.',
    'incomplete_order_description_2' => 'Müşterilerle iletişime geçtiyseniz ve satın almaya devam etmek istiyorlarsa, bağlantıyı takip ederek siparişlerini tamamlamalarına yardımcı olabilirsiniz:',
    'send_an_email_to_recover_this_order' => 'Bu siparişi kurtarmak için müşteriye bir e-posta gönderin',
    'see_maps' => 'Haritalara Bakın',
    'one_or_more_products_dont_have_enough_quantity' => 'Bir veya daha fazla üründe yeterli miktar yok!',
    'cannot_send_order_recover_to_mail' => 'E-posta bulunamadı, bu nedenle müşteriye bir kurtarma e-postası gönderilemiyor.',
    'payment_info' => 'Ödeme Bilgisi',
    'payment_method_refund_automatic' => 'Müşterinize :method kullanılarak otomatik olarak geri ödeme yapılacaktır.',
    'order' => 'Sipariş',
    'order_information' => 'Sipariş Numarası',
    'create_a_new_product' => 'Yeni Ürün',
    'out_of_stock' => 'Stokta Yok',
    'products_available' => 'Ürün(ler) Mevcut',
    'no_products_found' => 'Ürün Bulunamadı!',
    'note' => 'Not',
    'note_for_order' => 'Sipariş Notu',
    'amount' => 'Tutar',
    'add_discount' => 'İndirim Ekle',
    'discount' => 'İndirim',
    'add_shipping_fee' => 'Kargo Ücreti Ekle',
    'shipping' => 'Kargo:',
    'total_amount' => 'Toplam Tutar',
    'confirm_payment_and_create_order' => 'Ödemeyi Onayla ve Sipariş Oluştur',
    'paid' => 'Ödendi',
    'pay_later' => 'Daha Sonra Öde',
    'customer_information' => 'Müşteri Bilgileri',
    'create_new_customer' => 'Yeni Müşteri',
    'no_customer_found' => 'Müşteri Bulunamadı!',
    'customer' => 'Müşteri',
    'orders' => 'Ürün(ler)',
    'shipping_address' => 'Kargo Adresi',
    'see_on_maps' => 'Haritada Görüntüle',
    'name' => 'Ürün Adı',
    'price' => 'Tutar',
    'sku_optional' => 'Ürün Kodu (İsteğe Bağlı)',
    'with_storehouse_management' => 'Depo yönetimi ile mi?',
    'quantity' => 'Adet',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'Ürün stokta olmadığında müşteri sipariş verebilsin mi?',
    'address' => 'Adres',
    'phone' => 'Telefon',
    'country' => 'Ülke',
    'state' => 'Sipariş Durumu',
    'city' => 'İlçe',
    'zip_code' => 'Posta Kodu',
    'discount_based_on' => 'Özel İndirim Oluştur',
    'or_coupon_code' => 'Veya Kupon Kodu Kullan',
    'description' => 'Açıklama',
    'how_to_select_configured_shipping' => 'Yapılandırılmış gönderim nasıl seçilir?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Yapılandırılan gönderim ücretlerini görmek için lütfen tam gönderim adresiyle birlikte müşteri bilgilerini ekleyin',
    'free_shipping' => 'Ücretsiz Kargo',
    'custom' => 'Müşteri',
    'email' => 'E-Posta',
    'create_order' => 'Sipariş Oluştıur',
    'close' => 'Kapat',
    'confirm_payment_is_paid_for_this_order' => 'Bu sipariş için ödeme yapıldığını onaylayın',
    'payment_status_of_the_order_is_paid_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Siparişin ödeme durumunu onaylandı olarak ayarlıyorsunuz. Sipariş oluşturulduktan sonra ödeme durumu ve yöntemi değiştirilemez.',
    'select_payment_method' => 'Ödeme Türü',
    'cash_on_delivery_cod' => 'Kapıda Ödeme',
    'bank_transfer' => 'Banka Transferi',
    'paid_amount' => 'Ödenen Tutar',
    'confirm_that_payment_for_this_order_will_be_paid_later' => 'Bu siparişin ödemesinin daha sonra ödeneceğini onaylayın',
    'payment_status_of_the_order_is_pending_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Siparişin ödeme durumu Beklemede. Sipariş oluşturulduktan sonra ödeme yöntemini veya durumunu değiştiremezsiniz.',
    'pending_amount' => 'Bekleyen Miktar',
    'update_email' => 'E-Postayı Güncelle',
    'save' => 'Kaydet',
    'cancel' => 'İptal',
    'create_a_new_order' => 'Yeni sipariş oluştur',
    'search_or_create_new_product' => 'Ürün Eke Veya Yeni Bir Ürün Oluştur',
    'search_or_create_new_customer' => 'Yeni bir müşteri oluşturun veya arayın',
    'discount_description' => 'İndirim Açıklaması',
    'cant_select_out_of_stock_product' => 'Stokta Olmayan Ürünler Seçilemiyor',
    'billing_address' => 'Fatura Adresi',
    'change_return_order_status' => 'İade siparişi durumunu değiştir',
    'total_return_amount' => 'Toplam İade Tutarı',
    'return_success' => 'İstenen ürün/ürünler başarıyla iade edildi!',
    'return_reason' => 'İade Nedeni',
    'return_order_unique' => 'Aynı :attribute önceki bir iade isteğinde zaten var.',
    'return_order_confirmation_description' => 'Bu siparişi iade etmek istediğinizden emin misiniz? Bu işlem geri alınamaz',
    'return_order_confirmation' => 'İade Sipariş Onayı',
    'return_order' => 'İade Sipariş',
    'return_error' => 'Sipariş teslim ediliyor veya tamamlanmadı',
    'referral_data' => [
        'utm_term' => 'UTM Terimi',
        'utm_source' => 'UTM Kaynağı',
        'utm_medium' => 'UTM Ortamı',
        'utm_content' => 'UTM İçeriği',
        'utm_campaign' => 'UTM Kampanyası',
        'referrer_url' => 'Yönlendirme URL\'si',
        'referrer_domain' => 'Yönlendirme Alanı',
        'referral' => 'Referans',
        'landing_params' => 'İniş parametreleri',
        'landing_page' => 'Açılış Sayfası',
        'landing_domain' => 'İniş alanı',
        'ip' => 'IP',
        'gclid' => 'Gclid',
        'fclid' => 'Fclid',
    ],
    'referral' => 'Referans',
    'order_was_returned_by' => 'Sipariş, %user_name% tarafından iade edildi',
    'order_was_returned_at' => 'Sipariş şu tarihte iade edildi:',
    'order_was_returned' => 'Sipariş Onaylandı',
    'order_returned' => 'Sipariş İade Edildi',
    'order_return_reasons' => [
        'other' => 'Diğer',
        'not_as_described' => 'Tanımlandığı Gibi Değil',
        'no_longer_want' => 'Artık İstemiyorum',
        'incorrect_item' => 'Yanlış Ürün',
        'defective' => 'Arızalı',
        'damaged' => 'Hasarlı Ürün',
        'arrived_late' => 'Geç Geldi',
    ],
    'order_return' => 'İade Siparişler',
    'order_return_items_count' => 'Ürün Ögeleri',
    'order_address_types' => [
        'shipping_address' => 'Sipariş Adresi',
        'billing_address' => 'Fatura Adresi',
    ],
    'notices' => [
        'update_return_order_status_success' => 'İade siparişi durumunu başarıyla güncelleyin!',
        'update_return_order_status_error' => 'İade emri durumu güncellenemiyor! İade emri durumu geçerli olmayabilir.',
    ],
    'is_return' => 'İade Onay Kutusu',
];