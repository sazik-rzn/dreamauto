<?php
return [
    'title' => 'Техцентр',
    'site_url' => 'https://zagranavto.com',
    'site_name' => 'ДримАвто',
    'author' => 'Luxul Solutions LLC',
    'description' => 'Техцентр ДримАвто Рязань - полный спектр услуг в области обслуживания авто и мото техники',
    'keywords' => 'СТО,техцентр,автосервис,Рязань,Шиномонтаж,ДримАвто,ремонт авто',
    'copyright' => 'ДримАвто Рязань',
    'addresses' => [
        'Россия, Рязань, Ул. Зубковой, 8' => 'Техцентр ДримАвто',
    ],
    'phones' => [
        '+7(900)973-97-34' => 'Павел',
        '+7(953)747-92-52' => 'Георгий'
    ],
    'emails' => [
        'dreamauto62@yandex.ru'
    ],
    'ya_map_code' => '<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa18e5c666912ceaccb0104b249325ebf3e4fe0cd00fcb58e547f8377677c0292&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>',
    'ya_counter_code' => '<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(61427719, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/61427719" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->',
    'ya_verification_code' => '<meta name="yandex-verification" content="89f5c8af0eeef3a2">',
    'form_code' => '<script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script><iframe src="https://forms.yandex.ru/u/5ee80da40501e084f277ae85/?iframe=1" frameborder="0" name="ya-form-5ee80da40501e084f277ae85" width="100%"></iframe>',
    'menu' => [
        'Главная' => '/',
        'Заправка кондиционеров' => '/ice',
        'Промывка инжектора' => '/fuel',
        'Сход-развал'=>'/shodrazval',
        'Все услуги' => [
            'Шиномонтаж' => '/wheels',
            'Автосервис' => '/garage'
        ],
        'Контакты' => '/contact'
    ],
    'articles' => [
        [
            'img' => 'main_article.jpeg',
            'title' => 'Мы работаем для',
            'subtitle' => 'вас',
            'icon' => 'heart-empty',
            'content' => 'Специалисты техцентра ДримАвто готовы принять вас в любой день с 9 до 19 часов'
                . ' по адресу: <b>город Рязань, улица Зубковой, дом 8</b>. Мы не настаиваем, но все же было бы не '
                . 'плохо позвонить перед визитом, что бы мы были готовы как можно скорее обслужить ваш авто'
        ]
    ],
    'futures' => [
        [
            'img' => 'team_future.png',
            'title' => 'Мастера',
            'content' => 'У нас работают мастера высшего класса, которые всегда найдут выход из любой ситуации. '
                . 'Они всегда действуют в интересах клиента и ни когда не начинают работу до согласования с клиентом, '
                . 'а это важно - клиент всегда в курсе что делается и сколько это будет стоить.'
        ],
        [
            'img' => 'tools_future.png',
            'title' => 'Оборудование',
            'content' => 'Мы работаем только с профессиональным инструментом и оборудованием, всегда следим за его '
                . 'состоянием. В ДримАвто есть практически все что нужно для выполнения даже самых сложных работ, '
                . 'а если у нас чего-то нет, то мы найдем где есть.'
        ],
        [
            'img' => 'money_future.png',
            'title' => 'Цена',
            'content' => 'ДримАвто - один из самых демократичных автотехцентров Рязани в плане цены. Мы '
                . 'прекрасно понимаем насколько важен для вас ваш автомобиль и как порою бывает трудно находить крупные суммы '
                . 'на его ремонт. Мы на вашей стороне!'
        ]
    ],
    'slider' => [
        [
            'img' => 'banner_common.jpg',
            'title' => 'Скидка 10% всем',
            'text' => 'Оставьте заявку на обратный звонок или скажите что вы с сайта и вы получите скидку 10%',
            'action_text' => 'Позвонить нам',
            'action_href' => 'tel:+79009739734',
        ],
        [
            'img' => 'banner_common_2.jpeg',
            'title' => 'Диагностика подвески в подарок',
            'text' => 'При оплате услуг от 1000 рублей - диагностика подвески в подарок',
            'action_text' => 'Позвонить нам',
            'action_href' => 'tel:+79009739734',
        ]
    ]
];
