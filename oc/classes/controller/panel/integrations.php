<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panel_Integrations extends Auth_Controller {

    public function action_index()
    {
        $this->template->title = __('Integrations');

        $integrations = [
            [
                'name' => 'algolia',
                'config_name' => 'general.algolia_search',
                'label' => 'Algolia',
                'description' => __('Bring instant and relevant search to your classfieds website and make content browsing more intuitive for your visitors.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/algolia.png',
                'category' => '',
            ],
            [
                'name' => 'akismet',
                'config_name' => 'general.akismet_key',
                'label' => 'Akismet',
                'description' => __('Deals with spam posts and emails.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/akismet.svg',
                'category' => '',
            ],
            [
                'name' => 'autodata',
                'config_name' => 'general.autodata',
                'label' => 'Auto-Data',
                'description' => __('Get vehicle data for your website.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/auto-data.jpg',
                'category' => '',
            ],
            [
                'name' => 'carquery',
                'config_name' => 'general.carquery',
                'label' => 'CarQuery',
                'description' => __('Get vehicle data for your website.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/carquery.png',
                'category' => '',
            ],
            [
                'name' => 'clickatell',
                'config_name' => 'general.sms_auth',
                'label' => 'Clickatell',
                'description' => __('2 step SMS authentication.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/clickatell.png',
                'category' => '',
            ],
            [
                'name' => 'cloudinary',
                'config_name' => 'general.cloudinary',
                'label' => 'Cloudinary',
                'description' => __('Video custom fields.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/cloudinary.png',
                'category' => '',
            ],
            [
                'name' => 'disqus',
                'config_name' => 'general.blog_disqus',
                'label' => 'Disqus',
                'description' => __('Disqus allows you to embed comments within advertisements, blog posts and faqs'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/disqus.svg',
                'category' => '',
            ],
            [
                'name' => 'dropbox',
                'config_name' => 'advertisement.dropbox_app_key',
                'label' => 'Dropbox',
                'description' => __('File upload custom fields.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/dropbox.svg',
                'category' => '',
            ],
            [
                'name' => 'googleanalytics',
                'config_name' => 'general.analytics',
                'label' => 'Google Analytics',
                'description' => __('Get data of who and when visits your site.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-analytics.png',
                'category' => '',
            ],
            [
                'name' => 'googleauthenticator',
                'config_name' => 'general.google_authenticator',
                'label' => 'Google Authenticator',
                'description' => __('2 step authentication.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-authenticator.svg',
                'category' => '',
            ],
            [
                'name' => 'gcm',
                'config_name' => 'general.gcm_apikey',
                'label' => 'Google Cloud Messaging',
                'description' => __('Push notifications for your native app.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-gcm.png',
                'category' => '',
            ],
            [
                'name' => 'googlepicker',
                'config_name' => 'advertisement.google_picker',
                'label' => 'Google Picker',
                'description' => __('File upload custom fields.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-picker.png',
                'category' => '',
            ],
            [
                'name' => 'googlemaps',
                'config_name' => 'advertisement.gm_api_key',
                'label' => 'Google Maps',
                'description' => __('Show Google Maps on your website.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-maps.png',
                'category' => '',
            ],
            [
                'name' => 'pusher',
                'config_name' => 'general.pusher_notifications',
                'label' => 'Pusher',
                'description' => __('Notification system, you can notify your website users that an email was sent to them from your website.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/pusher.png',
                'category' => '',
            ],
            [
                'name' => 'recaptcha',
                'config_name' => 'general.recaptcha_active',
                'label' => 'reCaptcha',
                'description' => __('Configure reCaptcha as your captcha service provider.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/recaptcha.png',
                'category' => '',
            ],
        ];

        $social_integrations = [
            [
                'name' => 'facebook',
                'config_name' => 'general.facebook',
                'label' => 'Facebook',
                'description' => __('Facebook comments on your website.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/facebook.svg',
                'category' => '',
            ],
            [
                'name' => 'logbee',
                'config_name' => 'advertisement.logbee',
                'label' => 'Logbee',
                'description' => __('Integrates your site with Logbee'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/logbee.png',
                'category' => '',
            ],
            [
                'name' => 'pinterest',
                'config_name' => 'advertisement.pinterest',
                'label' => 'Pinterest',
                'description' => __('Auto post ads on Pinterest automatically.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/pinterest.svg',
                'category' => '',
            ],
            [
                'name' => 'twitter',
                'config_name' => 'advertisement.twitter',
                'label' => 'Twitter',
                'description' => __('Auto post ads on Twitter automatically.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/twitter.svg',
                'category' => '',
            ],
        ];

        $email_integrations = [
            [
                'name' => 'elasticemail',
                'config_name' => 'email.elastic_username',
                'label' => 'ElasticEmail',
                'description' => __('Configure ElasticEmail as your email service provider.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/elasticemail.jpg',
                'category' => '',
            ],
            [
                'name' => 'mailgun',
                'config_name' => 'email.mailgun_api_key',
                'label' => 'Mailgun',
                'description' => __('Configure Mailgun as your email service provider.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/mailgun.png',
                'category' => '',
            ],
        ];

        $payment_integrations = [
            [
                'name' => '2checkout',
                'config_name' => 'payment.twocheckout_sid',
                'label' => '2Checkout',
                'description' => __('Accept payments with 2Checkout.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/2checkout.jpg',
                'category' => '',
            ],
            [
                'name' => 'authorize',
                'config_name' => 'payment.authorize_login',
                'label' => 'Authorize',
                'description' => __('Accept payments with Authorize.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/authorize.jpg',
                'category' => '',
            ],
            [
                'name' => 'bitpay',
                'config_name' => 'payment.bitpay_pairing_code',
                'label' => 'Bitpay',
                'description' => __('Accept Bitcoing payments.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/bitpay.jpg',
                'category' => '',
            ],
            [
                'name' => 'escrow',
                'config_name' => 'payment.escrow_pay',
                'label' => 'Escrow',
                'description' => __('Accept Escrow payments.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/escrow.jpg',
                'category' => '',
            ],
            [
                'name' => 'fraudlabspro',
                'config_name' => 'payment.fraudlabspro',
                'label' => 'FraudLabsPro',
                'description' => __('Prevent fraud payments with FraudLabsPro.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/fraudlabspro.png',
                'category' => '',
            ],
            [
                'name' => 'mercadopago',
                'config_name' => 'payment.mercadopago_client_id',
                'label' => 'Mercadopago',
                'description' => __('Accept payments with Mercadopago.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/mercadopago.jpg',
                'category' => '',
            ],
            [
                'name' => 'paguelofacil',
                'config_name' => 'payment.paguelofacil_cclw',
                'label' => 'Paguelofacil',
                'description' => __('Accept payments with Paguelofacil.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/paguelofacil.png',
                'category' => '',
            ],
            [
                'name' => 'payfast',
                'config_name' => 'payment.payfast_merchant_id',
                'label' => 'Payfast',
                'description' => __('Accept payments with Payfast.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/payfast.jpg',
                'category' => '',
            ],
            [
                'name' => 'payline',
                'config_name' => 'payment.payline_merchant_id',
                'label' => 'Payline',
                'description' => __('Accept payments with Payline.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/payline.jpg',
                'category' => '',
            ],
            [
                'name' => 'paymill',
                'config_name' => 'payment.paymill_private',
                'label' => 'Paymill',
                'description' => __('Accept payments with Paymill.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/paymill.png',
                'category' => '',
            ],
            [
                'name' => 'paypal',
                'config_name' => 'payment.paypal_account',
                'label' => 'Paypal',
                'description' => __('Accept Paypal payments.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/paypal.png',
                'category' => '',
            ],
            [
                'name' => 'paytabs',
                'config_name' => 'payment.paytabs_merchant_email',
                'label' => 'Paytabs',
                'description' => __('Accept payments with Paytabs.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/paytabs.jpg',
                'category' => '',
            ],
            [
                'name' => 'robokassa',
                'config_name' => 'payment.robokassa_login',
                'label' => 'Robokassa',
                'description' => __('Accept payments with Robokassa.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/robokassa.png',
                'category' => '',
            ],
            [
                'name' => 'securepay',
                'config_name' => 'payment.securepay_merchant',
                'label' => 'SecurePay',
                'description' => __('Accept payments with SecurePay.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/securepay.png',
                'category' => '',
            ],
            [
                'name' => 'serfinsa',
                'config_name' => 'payment.serfinsa_token',
                'label' => 'Serfinsa',
                'description' => __('Accept payments with Serfinsa.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/serfinsa.png',
                'category' => '',
            ],
            [
                'name' => 'stripe',
                'config_name' => 'payment.stripe_private',
                'label' => 'Stripe',
                'description' => __('Accept Stripe payments and, with Stripe Connect, earn commissions from products sold on your site.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/stripe.png',
                'category' => '',
            ],
            [
                'name' => 'zenith',
                'config_name' => 'payment.zenith_merchantid',
                'label' => 'Zenith',
                'description' => __('Accept payments with Zenith.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/zenith.jpeg',
                'category' => '',
            ],
        ];

        $popular_integrations = [
            [
                'name' => 'elasticemail',
                'config_name' => 'email.elastic_username',
                'label' => 'ElasticEmail',
                'description' => __('Configure ElasticEmail as your email service provider.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/elasticemail.jpg',
                'category' => '',
            ],
            [
                'name' => 'paypal',
                'config_name' => 'payment.paypal_account',
                'label' => 'Paypal',
                'description' => __('Accept Paypal payments.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/paypal.png',
                'category' => '',
            ],
            [
                'name' => 'googleanalytics',
                'config_name' => 'general.analytics',
                'label' => 'Google Analytics',
                'description' => __('Get data of who and when visits your site.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-analytics.png',
                'category' => '',
            ],
            [
                'name' => 'googlemaps',
                'config_name' => 'advertisement.gm_api_key',
                'label' => 'Google Maps',
                'description' => __('Get data of who and when visits your site.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/google-maps.png',
                'category' => '',
            ],
            [
                'name' => 'recaptcha',
                'config_name' => 'general.recaptcha_active',
                'label' => 'reCaptcha',
                'description' => __('Configure reCaptcha as your captcha service provider.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/recaptcha.png',
                'category' => '',
            ],
            [
                'name' => 'stripe',
                'config_name' => 'payment.stripe_private',
                'label' => 'Stripe',
                'description' => __('Accept Stripe payments and, with Stripe Connect, earn commissions from products sold on your site.'),
                'logo' => Core::config('general.base_url') . 'themes/default/img/oc-panel/integrations/stripe.png',
                'category' => '',
            ],
        ];

        return $this->template->content = View::factory('oc-panel/pages/integrations/index', [
            'integrations' => $integrations,
            'email_integrations' => $email_integrations,
            'payment_integrations' => $payment_integrations,
            'social_integrations' => $social_integrations,
            'popular_integrations' => $popular_integrations,
        ]);
    }
}
