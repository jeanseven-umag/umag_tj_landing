<?php

use App\Article;
use App\Http\Middleware\XSS;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\FileUpload\InputFile;


Route::group(['middleware' => ['XSS']], function () {
    //Мультиязычность
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);

    //Страницы
    Route::get('/', 'Equip@allitemshome');
    Route::get('form', function () {
        return view('pages.form');
    });
//    Route::get('start', function () {
//        return view('pages.franchise');
//    });
//    Route::get('start', function () {
//        return redirect("http://vk.com");
//    });
    Route::get('request-form', function () {
        return view('pages.request-form');
    });

    Route::get('request-form-new', function () {
        return view('pages.request-form-new');
    });
//    Route::get('news', function () {
//        return view('pages.news');
//    });
    Route::get('vozmozhnosti-programmy-umag', function () {
        return view('pages.vozmozhnosti');
    });
    Route::get('kontakty', 'Contacts@index')->name('kontakty');
    Route::get('kontakty/getCities', 'Contacts@getCity');
    Route::get('kontakty/country', 'Contacts@getByCountry');
    Route::get('kontakty/city', 'Contacts@getByCity');
    Route::get('kontakty/edit/${id}', 'Contacts@edit')->name('kontakty.edit');
    Route::get('kontakty/table', 'Contacts@table');
    Route::get('legal/terms-of-use', function () {
        return view('pages.terms-of-use');
    });
    Route::get('privacy-policy', function () {
        return view('pages.privacy-policy');
    });
    Route::get('/almaty', function () {
        return redirect('/');
    });
    Route::get('equipment', 'Equip@allitems');
    Route::get('equipment/{equip}', 'Equip@single');
    Route::get('produktovyj-magazin', function () {
        return view('pages.shops.produkt_mag_new');
    });
    Route::get('magazin-kosmetiki', function () {
        return view('pages.shops.cos_mag');
    });
//    Route::get('snt', function () {
//        return view('pages.snt');
//    });
    Route::get('magazin-odezhdy', function () {
        return view('pages.shops.odezh_mag');
    });
    Route::get('apteka', function () {
        return view('pages.shops.apteka');
    });
    Route::get('magazin-spirtnyh-napitkov', function () {
        return view('pages.shops.spirt_mag');
    });
    Route::get('magazin-igrushek', function () {
        return view('pages.shops.toy_mag');
    });
    Route::get('magazin-aksessuarov', function () {
        return view('pages.shops.aksesuar');
    });
    Route::get('magazin-optiki', function () {
        return view('pages.shops.optica');
    });
    // Route::get('ceny', function () {
    //     return view('pages.stoimost');
    // });
    //new
    Route::get('ceny', function () {
        return view('pages.stoimost-new');
    });
//    Route::get('tariff', function () {
//        return view('pages.tariff_info');
//    });
    Route::get('success', function () {
        return view('pages.success');
    })->name('success');
    Route::get('success-target', function () {
        return view('pages.success-target');
    });
    Route::get('/clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Кэш очищен.";
    });

    Route::post('lol', 'AjaxController@index');
    Route::get('lol', function () {
        abort(404);
    });

    Route::get('target/{tag}', 'TargetController@index');

    // new contact form
    //Route::post('/contact-submit', 'AjaxController@submit')->name('contact.submit');
    Route::post('/contact-store', [\App\Http\Controllers\AjaxController::class, 'store'])->name('contact.store');
    //База знаний - old
    // Route::get('knowledge-base', 'KnowledgeController@index')->name('post.index');
    // Route::get('knowledge-base/show/{id}', ['as' => 'post.show', 'uses' => 'KnowledgeController@show']);
    // Route::get('knowledge-base/search', 'KnowledgeController@search')->name('post.search');
    // Route::get('knowledge-base/priemka', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/revisia', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/otshety', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/sysloyal', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/podpiska', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/nomenklatura', 'KnowledgeController@chapter')->name('post.chapter');

    // Route::get('knowledge-base/finance', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/product', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/sales', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/directory', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/cassa', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/androidcassa', 'KnowledgeController@chapter')->name('post.chapter');
    // Route::get('knowledge-base/cabinet', 'KnowledgeController@chapter')->name('post.chapter');

    //KnowledgeBase new
    Route::get('knowledge-base-react/{link}/{version?}', ['as' => 'post.show', 'uses' => 'KnowledgeBaseController@versionReact'])
    ->where('version', 'web|iOS|android');
    Route::get('knowledge-base-react', 'KnowledgeBaseController@indexReact');
    Route::get('knowledge-base-new', 'KnowledgeBaseController@index')->name('post.index');
    Route::get('knowledge-base-new/show/{id}', ['as' => 'post.show', 'uses' => 'KnowledgeBaseController@show']);
    Route::get('knowledge-base-new/{link}/{version?}', ['as' => 'post.show', 'uses' => 'KnowledgeBaseController@version'])
    ->where('version', 'web|iOS|android');

    Route::get('knowledge-base-new-search', 'KnowledgeBaseController@search');

    //knowledgeBase getByCategory
    Route::get('knowledge-base-category/{category_id}', 'KnowledgeBaseController@categoryIndex');
    Route::get('knowledge-base-category-react/{category_id}', 'KnowledgeBaseController@categoryReact');

    //knowledgebase most readed
    Route::get('knowledge-base-popular', 'KnowledgeBaseController@popular');
    Route::put('knowledge-base-popular/{id}', 'KnowledgeBaseController@likeCount');

    //surveys front
    Route::get('surveys-front', 'SurveyController@getSurveys');
    Route::get('surveys-front/{id}', 'SurveyController@getSurveyOptions');
    Route::post('surveys-front/submit', 'SurveyController@submitSurveyResult');


});

//отображение формы аутентификации
Route::get('auth-page', 'Auth\LoginController@showLoginForm')->name('auth-page');
//POST запрос аутентификации на сайте
Route::post('login', 'Auth\LoginController@login');
//POST запрос на выход из системы (логаут)
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('info', function () {
    return view('pages.info');
});
Route::post('ckjmopcpokqckxskpxskpxzksaxmsaplkkxsaskaopxaspokxpaslkxplsakxaskxalxksaxkosajxko', 'Equip@Add');

Route::get('Aidana-test', function () {
    return view('pages.test');
});


Route::get('test', function () {
    return view('test');
})->middleware('auth');

Route::post('count', 'counter@index');
Route::post('mail', 'MailController@send');

Route::get('finance', function () {
    return view('pages.finance');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('knowledge-panel', 'AdminController@index')->name('knowledge-panel');
    Route::get('knowledge-panel/create', 'AdminController@create')->name('admin.create');
    Route::get('knowledge-panel/show/{id}', 'AdminController@show')->name('admin.show');
    Route::get('knowledge-panel/remove/{id}', 'AdminController@remove')->name('admin.remove');
    Route::get('knowledge-panel/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::post('knowledge-panel/store', 'AdminController@store')->name('admin.store');
    Route::post('knowledge-panel/update', 'AdminController@update')->name('admin.update');

    //new version knowledge base
    Route::get('knowledge-panel-new', 'AdminControllerNew@index')->name('knowledge-panel-new');
    Route::get('knowledge-panel-new/create', 'AdminControllerNew@create')->name('new.admin.create');
    Route::get('knowledge-panel-new/show/{id}', 'AdminControllerNew@show')->name('new.admin.show');
    Route::get('knowledge-panel-new/edit/{id}', 'AdminControllerNew@edit')->name('new.admin.edit');
    Route::post('knowledge-panel-new/store', 'AdminControllerNew@store')->name('new.admin.store');
    Route::get('knowledge-panel-new/remove/{id}', 'AdminControllerNew@remove')->name('new.admin.remove');

    // knowledgebase categories
    Route::get('knowledge-categories', 'AdminControllerNew@indexCategory')->name('knowledge-categories');
    Route::get('knowledge-category/create', 'AdminControllerNew@createCategory')->name('new.admin.category-create');
    Route::post('knowledge-category/store', 'AdminControllerNew@storeCategory')->name('new.admin.category-store');
    Route::get('knowledge-categories/edit/{id}', 'AdminControllerNew@editCategory')->name('new.admin.category-edit');

    //Survey and options
    Route::resource('surveys', 'AdminSurveyController')->except(['show']);

    Route::get('survey-results', 'AdminSurveyController@getSurveyResults');

    Route::get('cabinet-sale', 'AdminController@index')->name('knowledge-panel');

    Route::get('faq-panel', 'FaqController@index')->name('faq-panel');
    Route::get('faq-panel/create', 'FaqController@create')->name('faq_admin.create');
    Route::get('faq-panel/show/{id}', 'FaqController@show')->name('faq_admin.show');
    Route::get('faq-panel/remove/{id}', 'FaqController@remove')->name('faq_admin.remove');
    Route::get('faq-panel/edit/{id}', 'FaqController@edit')->name('faq_admin.edit');
    Route::post('faq-panel/store', 'FaqController@store')->name('faq_admin.store');
    Route::post('faq-panel/update', 'FaqController@update')->name('faq_admin.update');

    Route::get('video-panel', 'VideoController@index')->name('video-panel');
    Route::get('video-panel/create', 'VideoController@create')->name('video_admin.create');
    Route::get('video-panel/show/{id}', 'VideoController@show')->name('video_admin.show');
    Route::get('video-panel/remove/{id}', 'VideoController@remove')->name('video_admin.remove');
    Route::get('video-panel/edit/{id}', 'VideoController@edit')->name('video_admin.edit');
    Route::post('video-panel/store', 'VideoController@store')->name('video_admin.store');
    Route::post('video-panel/update', 'VideoController@update')->name('video_admin.update');


    Route::get('amo', 'AmoController@index')->name('amo');
    Route::get('amo/updateActive', 'AmoController@updateActive')->name('amo.updateActive');
    Route::get('amo/changeOrder', 'AmoController@changeOrder')->name('amo.changeOrder');

    Route::get('amo-integration', 'AmoController@index')->name('amo-integration');
    Route::get('amo/create', 'AmoController@create')->name('amo.create');
    Route::get('amo/edit/${id}', 'AmoController@edit')->name('amo.edit');
    Route::get('amo/remove/${id}', 'AmoController@remove')->name('amo.remove');
    Route::post('amo-integration/store', 'AmoController@store')->name('amo-integration.store');
    Route::post('amo-integration/edit', 'AmoController@editStore')->name('amo-integration.editStore');
    Route::get('amo/queries', 'AmoController@queries')->name('amo.queries');
    Route::get('amo/queriesSecret', 'AmoController@queriesSecret')->name('amo.queriesSecret');
    Route::get('amo/queriesSecret/remove/${id}', 'AmoController@queriesSecretRemove')->name('amo.queriesSecretRemove');

    Route::post('kontakty/store', 'Contacts@store')->name('kontakty.store');
    Route::get('kontakty/create', 'Contacts@create')->name('kontakty.create');
    Route::get('kontakty/remove/${id}', 'Contacts@remove')->name('kontakty.remove');

    Route::post('get-tokens', 'AmoController@getTokens')->name('get-tokens.get');
    Route::post('get-refresh-token', 'AmoController@getRefreshToken')->name('get-refresh-token');

    Route::get('article-integration', 'ArticleController@index')->name('article-integration');
    Route::get('article-integration/create', 'ArticleController@create')->name('article-integration.create');

    Route::get('article-categories/create', 'ArticleController@createCategory')->name('categories.create');
    Route::get('article-subcategories/create', 'ArticleController@createSubCategory')->name('subcategories.create');
    Route::post('article-categories/store', 'ArticleController@storeCategory')->name('article-categories.store');
    Route::get('article-categories/remove/${id}', 'ArticleController@removeCategory')->name('article-categories.remove');
    Route::get('article-subcategories/remove/${id}', 'ArticleController@removeSubCategory')->name('article-subcategories.remove');
    Route::get('article-categories/edit/${id}', 'ArticleController@editCategory')->name('article-categories.edit');
    Route::get('article-subcategories/edit/${id}', 'ArticleController@editSubCategory')->name('article-subcategories.edit');
    Route::get('article-subcategories-list', 'ArticleController@indexSubCategory')->name('subcategories-list');
    Route::get('article-categories-list', 'ArticleController@indexCategory')->name('categories-list');

//    Route::get('cabinet-categories/create', 'CabinetSaleController@createCategory')->name('cabinet-categories.create');
//    Route::get('cabinet-categories/store', 'CabinetSaleController@storeCategory')->name('cabinet-categories.store');
//    Route::get('cabinet-categories-list', 'CabinetSaleController@indexCategory')->name('cabinet-categories-list');

//    Route::post('article/store', 'ArticleController@store')->name('article.store');
    Route::post('article/store', 'ArticleController@store_v2')->name('article.store_v2');
    Route::get('article/remove/${id}', 'ArticleController@remove')->name('article.remove');
    Route::get('article-integration/edit/{id}', 'ArticleController@edit')->name('article-integration.edit');
    Route::get('article-integration/show/{id}', 'ArticleController@show')->name('article-integration.show');

    Route::get('article-franz-integration', 'ArticleController@indexFranz')->name('article-franz-integration');
    Route::get('article-franz-integration/create', 'ArticleController@createFranz')->name('article-franz-integration.create');

    Route::get('article-franz-categories/remove/${id}', 'ArticleController@removeFranzCategory')->name('article-franz-categories.remove');
    Route::get('article-franz-subcategories/remove/${id}', 'ArticleController@removeFranzSubCategory')->name('article-franz-subcategories.remove');

    Route::get('article-franz-categories/create', 'ArticleController@createCategory')->name('categories-franz.create');
    Route::get('article-franz-subcategories/create', 'ArticleController@createFranzSubCategory')->name('franz-subcategories.create');
    Route::get('categories-franz-list', 'ArticleController@indexFranzCategory')->name('categories-franz-list');
    Route::get('subcategories-franz-list', 'ArticleController@indexFranzSubCategory')->name('subcategories-franz-list');

    Route::get('article-franz-categories/edit/${id}', 'ArticleController@editFranzCategory')->name('article-franz-categories.edit');
    Route::get('article-franz-subcategories/edit/${id}', 'ArticleController@editFranzSubCategory')->name('article-franz-subcategories.edit');

    Route::post('article-franz/store', 'ArticleController@store')->name('article.store');
    Route::get('article-franz/remove/{id}', 'ArticleController@removeFranz')->name('article-franz.remove');
    Route::get('article-franz-integration/edit/{id}', 'ArticleController@editFranz')->name('article-franz-integration.edit');


//    Route::get('bot-integration/show/${id}', 'ArticleController@show')->name('bot-integration.show');
//    Route::get('bot-integration/remove/${id}', 'ArticleController@remove')->name('bot-integration.remove');
//    Route::get('bot-integration/edit/${id}', 'ArticleController@edit')->name('bot-integration.edit');
//    Route::post('bot-integration/store', 'ArticleController@store')->name('bot-integration.store');
//    Route::post('bot-integration/update', 'ArticleController@update')->name('bot-integration.update');
});

// intil commented
//Route::get('cabinet-categories/create', 'CabinetSaleController@createCategory')->name('cabinet-categories.create');
//Route::post('cabinet-categories/store', 'CabinetSaleController@storeCategory')->name('cabinet-categories.store');
//Route::get('cabinet-categories-list', 'CabinetSaleController@indexCategory')->name('cabinet-categories-list');
//Route::get('cabinet-categories/remove/${id}', 'CabinetSaleController@removeCategory')->name('cabinet-categories.remove');
//Route::get('cabinet-categories/edit/${id}', 'CabinetSaleController@editCategory')->name('cabinet-categories.edit');
//Route::post('cabinet/store', 'CabinetSaleController@store')->name('cabinet.store');
//Route::get('cabinet-list', 'CabinetSaleController@index')->name('cabinet-list');
//Route::get('cabinet/create', 'CabinetSaleController@createCabinet')->name('cabinet-create');
//Route::get('cabinet/remove/${id}', 'CabinetSaleController@removeCabinet')->name('cabinet-remove');
//Route::get('cabinet/edit/${id}', 'CabinetSaleController@editCabinet')->name('cabinet-edit');
//Route::get('cabinet-sale-page', 'CabinetSaleController@cabinetSale')->name('cabinet-sale');

Route::get('article-integration/show/{id}', 'ArticleController@show')->name('article-integration.show');
//Route::resource('article', 'WebControllers\ArticleController');
//Route::post('bot-integration', 'ArticleController@botApi')->name('bot-integration');

Route::post('/botIntegration/webhook', function () {
    $bot = Telegram::bot('mybot');
    $result = $bot->getWebhookUpdates();
    $chat_id = $result->getChat()->getId();
    $categories = DB::table('article_categories')->where('franz', '=', 0)->get();
    if (count($categories) === 0) {
        $bot->sendMessage([
            'text' => 'Пока данных нет',
            'chat_id' => $chat_id
        ]);
        return 0;
    }
    $keyboard = Keyboard::make()->inline();
//    $items = array_map(function ($cat) {
//        return [
//            'text'          => $cat['name'],
//            'callback_data' => $cat['id'],
//        ];
//    }, $categories);
//
//    $max_per_row  = 2; // or however many you want!
//    $per_row      = sqrt(count($items));
//    $rows         = array_chunk($items, $per_row === floor($per_row) ? $per_row : $max_per_row);
//    $reply_markup = $keyboard->row(...$rows);
    foreach ($categories as $category) {
        $keyboard->row(Keyboard::inlineButton([
            'text' => $category->name,
            'callback_data' => 'category/' . $category->id,
        ]));
    }

    if ($result->isType('callback_query')) {
        $value = explode('/', $result->callback_query->data);
        switch ($value[0]) {
            case 'category':
                $subCategories = DB::table('article_sub_categories')
                    ->where('franz', '=', 0)
                    ->where('category_id', '=', $value[1])
                    ->get();

                $keyboardSubCategory = Keyboard::make()->inline();

                foreach ($subCategories as $category) {
                    $keyboardSubCategory->row(Keyboard::inlineButton([
                        'text' => $category->name,
                        'callback_data' => 'subcategory/' . $category->id . '/category/' . $value[1],
                    ]));
                }
                $keyboardSubCategory->row(Keyboard::inlineButton([
                    'text' => 'Назад',
                    'callback_data' => 'main/',
                ]));
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                $bot->sendMessage([
                    'text' => 'Выберите подкатегорию',
                    'reply_markup' => $keyboardSubCategory,
                    'chat_id' => $chat_id
                ]);
                break;
            case 'subcategory':
                $articles = DB::table('answers')
                    ->where('franz', '=', 0)
                    ->where('category_id', '=', $value[1])
                    ->get();

                $keyboardArticle = Keyboard::make()->inline();

                foreach ($articles as $article) {
                    $keyboardArticle->row(Keyboard::inlineButton([
                        'text' => $article->title,
//                        'url' => 'https://umag.kz/',
                        'callback_data' => 'article/' . $article->id,
                    ]));
                }
                $keyboardArticle->row(Keyboard::inlineButton([
                    'text' => 'Назад',
                    'callback_data' => 'category/' . $value[3],
                ]));
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                if (count($articles) !== 0) {
                    $bot->sendMessage([
                        'text' => 'Выберите вопрос',
                        'reply_markup' => $keyboardArticle,
                        'chat_id' => $chat_id,
                    ]);
                } else {
                    $bot->sendMessage([
                        'text' => 'Пусто по вашему запросу',
                        'reply_markup' => $keyboardArticle,
                        'chat_id' => $chat_id,
                    ]);
                }
                break;
            case 'article':
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                $article = DB::table('answers')
                    ->where('id', '=', $value[1])
                    ->get();
                $keyboardArticle = Keyboard::make()->inline();
                $keyboardArticle->row(Keyboard::inlineButton([
                    'text' => 'Меню',
                    'callback_data' => 'main/',
                ]));
                $bot->sendMessage([
                    'text' => $article[0]->link,
                    'reply_markup' => $keyboardArticle,
                    'chat_id' => $chat_id,
                ]);
                break;
            default:
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);

                $bot->sendMessage([
                    'text' => 'Выберите категорию', // 'Выберите категорию'
                    'reply_markup' => $keyboard,
                    'chat_id' => $chat_id
                ]);
        }
    } else {
        $bot->sendMessage([
            'text' => 'Выберите категорию', // 'Выберите категорию'
            'reply_markup' => $keyboard,
            'chat_id' => $chat_id
        ]);
//        Telegram::deleteMessage([
//            'chat_id' => $chat_id,
//            'message_id' => $response->getMessageId(),
//        ]);

    }


//    $updates = Telegram::commandsHandler(true);
    return 'ok';
});

Route::post('/botPartnerIntegration/webhook', function () {
    $bot = Telegram::bot('mySecondBot');
    $result = $bot->getWebhookUpdates();
    $chat_id = $result->getChat()->getId();
    $categories = DB::table('article_categories')->where('franz', '=', 1)->get();
    if (count($categories) === 0) {
        $bot->sendMessage([
            'text' => 'Пока данных нет',
            'chat_id' => $chat_id
        ]);
        return 0;
    }
    $keyboard = Keyboard::make()->inline();
    foreach ($categories as $category) {
        $keyboard->row(Keyboard::inlineButton([
            'text' => $category->name,
            'callback_data' => 'category/' . $category->id,
        ]));
    }
//    dd($categories);

    if ($result->isType('callback_query')) {
        $value = explode('/', $result->callback_query->data);
        switch ($value[0]) {
            case 'category':
                $subCategories = DB::table('article_sub_categories')
                    ->where('franz', '=', 1)
                    ->where('category_id', '=', $value[1])
                    ->get();

                $keyboardSubCategory = Keyboard::make()->inline();

                foreach ($subCategories as $category) {
                    $keyboardSubCategory->row(Keyboard::inlineButton([
                        'text' => $category->name,
                        'callback_data' => 'subcategory/' . $category->id . '/category/' . $value[1],
                    ]));
                }
                $keyboardSubCategory->row(Keyboard::inlineButton([
                    'text' => 'Назад',
                    'callback_data' => 'main/',
                ]));
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                $bot->sendMessage([
                    'text' => 'Выберите подкатегорию',
                    'reply_markup' => $keyboardSubCategory,
                    'chat_id' => $chat_id
                ]);
                break;
            case 'subcategory':
                $articles = DB::table('answers')
                    ->where('franz', '=', 1)
                    ->where('category_id', '=', $value[1])
                    ->get();

                $keyboardArticle = Keyboard::make()->inline();

                foreach ($articles as $article) {
                    $keyboardArticle->row(Keyboard::inlineButton([
                        'text' => $article->title,
//                        'url' => 'https://umag.kz/',
                        'callback_data' => 'article/' . $article->id,
                    ]));
                }
                $keyboardArticle->row(Keyboard::inlineButton([
                    'text' => 'Назад',
                    'callback_data' => 'category/' . $value[3],
                ]));
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                if (count($articles) !== 0) {
                    $bot->sendMessage([
                        'text' => 'Выберите вопрос',
                        'reply_markup' => $keyboardArticle,
                        'chat_id' => $chat_id,
                    ]);
                } else {
                    $bot->sendMessage([
                        'text' => 'Пусто по вашему запросу',
                        'reply_markup' => $keyboardArticle,
                        'chat_id' => $chat_id,
                    ]);
                }
                break;
            case 'article':
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                $article = DB::table('answers')
                    ->where('id', '=', $value[1])
                    ->get();
                $keyboardArticle = Keyboard::make()->inline();
                $keyboardArticle->row(Keyboard::inlineButton([
                    'text' => 'Меню',
                    'callback_data' => 'main/',
                ]));
                $bot->sendMessage([
                    'text' => $article[0]->link,
                    'reply_markup' => $keyboardArticle,
                    'chat_id' => $chat_id,
                ]);
                break;
            default:
                $bot->deleteMessage([
                    'message_id' => $result->getMessage()->message_id,
                    'chat_id' => $chat_id
                ]);
                $bot->sendMessage([
                    'text' => 'Выберите категорию',
                    'reply_markup' => $keyboard,
                    'chat_id' => $chat_id
                ]);
        }

    } else {
        $bot->sendMessage([
            'text' => 'Выберите категорию', // 'Выберите категорию'
            'reply_markup' => $keyboard,
            'chat_id' => $chat_id
        ]);
//        Telegram::deleteMessage([
//            'chat_id' => $chat_id,
//            'message_id' => $response->getMessageId(),
//        ]);

    }


//    $updates = Telegram::commandsHandler(true);
    return 'ok';
});

Route::get('testApi', function () {
    $categories = DB::table('article_categories')->where('franz', '=', 0)->get();

    $keyboard = Keyboard::make()->inline();
    for ($i = 0; $i < count($categories) - 1; $i += 2) {
        $keyboard->row(
            Keyboard::inlineButton([
                'text' => $categories[$i]->name,
                'callback_data' => 'category/' . $categories[$i]->id
            ]),
            []
        );
    }
    Telegram::sendMessage([
        'text' => 'Выберите категорию',
        'reply_markup' => $keyboard,
        'chat_id' => 473457669
    ]);
//    dd(Telegram::deleteMessage);
//    Telegram::deleteMessage([
//        'chat_id' => 859038951,
//        'message_id' => '1593',
//    ]);
//    $keyboardArticle2 = Keyboard::make()->inline();
//    $keyboardArticle2->row(Keyboard::inlineButton([
//        'text' => $article[0]->title,
//        'url' => 'https://umag.kz/article-integration/'.$article[0]->id,
//        'callback_data' => 'article/'.$article[0]->id,
//    ]));
//    Telegram::sendMessage([
//        'text' => 'asdasd',
//        'reply_markup' => $keyboardArticle2,
//        'chat_id' => 859038951
//    ]);

    $remoteImage = 'https://umag.kz/images/1628147665.png';
    $filename = '1628147665.png';
    Telegram::sendPhoto([
        'photo' => InputFile::create('https://umag.kz/images/1628147665.png', '1628147665.png'),
        'chat_id' => 473457669,
        'caption' => '123123'
    ]);

    //Use ini_get to get the error_log directive.
    $errorLogLocation = ini_get('error_log');

//Print out the location of the error log.
    echo 'Your error log is located at: ' . $errorLogLocation;
//
//
//    Telegram::sendMessage([
//        'text' => 'asd',
//        'chat_id' => 859038951,
//    ]);
//    Telegram::sendPhoto([
//        'photo' => \Telegram\Bot\FileUpload\InputFile::create('https://umag.kz/images/1628147665.png'),
//        'chat_id' => 859038951,
//        'caption' => '123123'
//    ]);

//    Telegram::sendPhoto([
//        'photo' => 'https://umag.kz/images/1628147665.png',
//        'caption' => '123123',
//        'chat_id' => 859038951,
//    ]);
//                Telegram::sendPhoto([
//                    'photo' => 'https://umag.kz/images/'.$article->img_path,
//                    'caption' => $article->description,
//                    'chat_id' => $chat_id,
//                ]);

//    $categories = DB::select('select * from article_categories');
//    $keyboard = Keyboard::make()->inline();
//    $chat_id = 1;
//    foreach($categories as  $category) {
//        $keyboard->row(Keyboard::inlineButton([
//            'text' => $category->name,
//            'callback_data' => $category->id,
//        ]));
//    }
//    dd($keyboard);
//
//    $article = Article::where('franz', 0)->orderBy('id')->get();
//    $article2 = DB::select('select * from articles');
////    $response = Telegram::sendMessage([
////        'chat_id' => $chat_id',
////        'text' => '111'
////    ]);
//    $response = Telegram::setAsyncRequest(true)->sendMessage([
//        'chat_id' => $chat_id,
//        'text' => $article2[0]->title
//    ]);
//
////    $response = Telegram::sendMessage([
////        'chat_id' => $chat_id',
////        'text' => '22'
////    ]);
////
////    $messageId = $response-

});

Route::get('/setwebhook', function () {
    $bot = Telegram::bot('mySecondBot');
    $bot2 = Telegram::bot('mybot');
    $response = $bot->setWebhook([
        'url' => 'https://umag.kz/bot
        Integration/webhook',
        'ip_address' => '82.202.242.179'
    ]);

    $bot2->setWebhook([
        'url' => 'https://umag.kz/botIntegration/webhook',
        'ip_address' => '82.202.242.179'
    ]);
    dd($response);
});

Route::post('/amoclient/salelead/p/1mRvccyvDqmToZzkoJK8', 'webhook@hook');

Route::get('/sale', 'landing@index');
Route::post('/sale', 'landing@ajax');


Route::get('nauryz', function () {
    return view('pages.nauryz');
});


Route::get('/amoclient/salelead/p/1mRvccyvDqmToZzkoJK8', function () {
    return abort(404);
});

Route::get('/lead', 'amoCrm\LeadController@leads');
